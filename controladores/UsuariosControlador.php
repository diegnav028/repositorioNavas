<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UsuariosControlador
 *
 * @author Usuario
 */
class UsuariosControlador {
  function inicio(){
        
        $conn = Conexion::conectar();  
      
            
      
   
        $usuario=new Usuario();
        $usuarioDAO=new UsuarioDAO($conn);
     
        
        require 'vistas/inicio.php';
        
    }
    
     
    function registro(){
        $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO(Conexion::conectar());
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                 $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            
               $nombre= filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
                  $fecha= $_POST['fecha'] ;
            
      
            $pass = filter_var($_POST['contras'], FILTER_SANITIZE_STRING);
         
     

          


            
            
            
            
            require 'vistas/inicio.php';
        } else {

            require 'vistas/registro.php';

        }
        
    }
    
    function comprobarRegistro(){
          
          $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $post = array_map('trim',$_POST); // if any input is an array, use a recursive trim call-back function here instead of php's trim

	// validate inputs
	if($post['nombre'] === '')
	{
		$errors['nombre'] = "El nombre no puede estar en blanco.";
	} else  
        {
                 $nombre= filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
                   if(strlen($nombre)<5 || strlen($nombre)>10){
            $errors['nombre'] = "El nombre debe tener entre 5 y 10 caracteres.";
        }
        }
      
	if($post['email'] === '')
	{
		$errors['email'] = "El email no puede estar en blanco.";
	}
	else if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = "El formato del email no es el correcto.";
	} else {
                  
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                if($usuarioDAO -> obtenerPorEmail($email)){

           $errors['email'] = "Este email ya esta registrado.";

            }
        }
	
	if($post['contras'] === '')
	{
		$errors['contras'] = "La contrasena no puede estar en blanco";
	}else{
               $pass = filter_var($_POST['contras'], FILTER_SANITIZE_STRING);
        }	
	if(empty($post['fecha']) ){
            $errors['fecha'] = "Se debe seleccionar una fecha de nacimiento";
        }else{
                   $fecha= $_POST['fecha'] ;
     $mayor=18;

        //Creamos objeto fecha desde los valores recibidos
        $nacio = DateTime::createFromFormat('Y-m-d', $fecha);

        //Calculamos usando diff y la fecha actual
        $calculo = $nacio->diff(new DateTime());

        //Obtenemos la edad
        $edad=  $calculo->y;    

        if ($edad < $mayor) {
            $errors['fecha'] ="Debe ser mayor de edad";
        }
        }
      if(empty($errors))
	{

            $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $CartaDAO= new CartaDAO(Conexion::conectar());
            $MazoDAO= new MazoDAO(Conexion::conectar());
            $PersonajeDAO= new PersonajeDAO(Conexion::conectar());
            $MejoraDAO= new MejoraDAO(Conexion::conectar());
         

                $passCodific = password_hash($pass, PASSWORD_BCRYPT);

                $usuario -> setEmail($email);
                $usuario -> setContrasena($passCodific);
                $usuario ->setNick($nombre);
                $usuario->setFecha_naci($fecha);
                $usuario->setRol('usuario');
                $usuario->setGold(0);
                $usuario->setPiso(0);
                $usuario->setVictorias(0);
                $usuarioDAO -> insertar($usuario);
                $usuario=$usuarioDAO->obtenerPorEmail($email);
                $personaje=new Personaje();
                $personaje->setId_usu($usuario->getId_usu());
                $personaje->setMana(10);
                $personaje->setVida(50);
                $personaje->setMano(5);
                $personaje->setDefensa(1);
                $personaje->setVida_combate(50);
                $PersonajeDAO->insertar($personaje);
                $usuarioDAO->generarBaraja($usuario);
                $usuarioDAO->generarTienda($usuario);
                $tienda=$usuarioDAO->obtenerTienda($usuario);
                $cartastienda=$CartaDAO->obtenerTodosTienda();
                foreach ($cartastienda as $ctienda){
                    $CartaDAO->insertarTiendaCarta($ctienda, $tienda);
                }
                $mejoras=$MejoraDAO->obtenerTodos();
                foreach ($mejoras as $m){
                    $MejoraDAO->insertarMejora($m, $tienda);
                }
                $cartas=$CartaDAO->obtenerTodosNoTienda();
                $baraja=$usuarioDAO->obtenerBaraja($usuario);
                foreach ($cartas as $c){
                    $CartaDAO->insertarBarajaCartas($c,$baraja->getId_baraja());
                }
                $Mazo=new Mazo();
                $Mazo->setId_usu($usuario->getId_usu());
                $Mazo->setTamano(10);
                for ($i=0 ; $i<5; $i++){
                    if($i==0){
                        $Mazo->setFamilia("melee");
                        $MazoDAO->insertar($Mazo);
                    }
                    if($i==1){
                     $Mazo->setFamilia("gun");   
                       $MazoDAO->insertar($Mazo);
                    }
                   if($i==2){
                     $Mazo->setFamilia("psi");   
                       $MazoDAO->insertar($Mazo);
                    }
                       if($i==3){
                     $Mazo->setFamilia("cyber");   
                       $MazoDAO->insertar($Mazo);
                    }
                    if($i==4){
                        $Mazo->setFamilia("combate");
                         $MazoDAO->insertar($Mazo);
                    }
                }
                  for ($i=0 ; $i<4; $i++){
                    if($i==0){
                        $Mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(),"melee");
                        $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 1);
                           $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 1);
                              $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 1);
                                 $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 1);
                                    $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 1);
                    }
                    if($i==1){
                  $Mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                        $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 2);
                               $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 2);
                               $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 2);
                               $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 2);
                               $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 2);
                    }
                   if($i==2){
                         $Mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                        $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 3);
                          $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 3);
                            $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 3);
                              $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 3);
                                $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 3);
                            
                    }
                       if($i==3){
                       $Mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                        $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 4);
                         $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 4);
                          $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 4);
                           $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 4);
                            $MazoDAO->insertarCartaMazo($Mazo->getId_mazo(), 4);
                    }
                }
   
         
	
          
          
          
          
          
	}
    
	// if no errors, use the form data
	
	
	$response = [];
	if(empty($errors))
	{
            $response["exito"]=1;
	}
	else
	{
                    $response["exito"]=0;
		foreach($errors as $key=>$value)
		{
			$response[$key.'_error'] = $value;
		}
	}

        header("Content-type: application/json; charset=utf-8");
      
           
   
	echo json_encode($response,JSON_FORCE_OBJECT);
 

    }








    function login(){
        
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $pass = filter_var($_POST['contras'], FILTER_SANITIZE_STRING);
        $usuarioDAO = new UsuarioDAO(Conexion::conectar());
        $usuario = $usuarioDAO -> obtenerPorEmail($email);

        if(!$usuario){
   MensajeFlash::guardarMensaje("Email o contraseña incorrectos");
            header("Location: index.php");
            die();

        }

        if(!password_verify($pass, $usuario -> getContrasena())){
         MensajeFlash::guardarMensaje("Email o contraseña incorrectos");
            header("Location: index.php");
            die();

        }

        $_SESSION['email'] = $email;
        $_SESSION['contras'] = $pass;
           setcookie("email", $email, time() + 20 * 24 * 60 * 60);
        header("Location: index.php");
        die();
        
    }
    
    function logout(){
        
        session_destroy();
        setcookie("email", "", time()-5);
        
        header("Location: index.php");
        die();
        
    }
     function comprobarEmail(){
     $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $post = array_map('trim',$_POST); 
        header("Content-type: spplicatios/json; charset=utf-8");
        
       if($post['email'] === '')
	{
		$errors['email'] = "El email no puede estar en blanco.";
	}
	else if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = "El formato del email no es el correcto.";
	} else {
                  
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
               $usuario = $usuarioDAO -> obtenerPorEmail($email);
                if(!$usuario){

           $errors['email'] = "Este usuario no existe.";

            }else{
                if($post['contras'] === '')
	{
		$errors['contras'] = "La contrasena no puede estar en blanco";
	}else{
              $pass = filter_var($_POST['contras'], FILTER_SANITIZE_STRING);
        
                  if(!password_verify($pass, $usuario -> getContrasena())){
        
           $errors['contras'] = "La contrasena no es la correcta";
         

        }
        }
        
      
            }
        }
	
	
        
        
       
$response = [];
	if(empty($errors))
	{

	}
	else
	{
           
		foreach($errors as $key=>$value)
		{
			$response[$key.'_error'] = $value;
		}
	}

        header("Content-type: application/json; charset=utf-8");
      
           
   
	echo json_encode($response,JSON_FORCE_OBJECT);
        
    }
    
    function adminUsu(){
          $conn = Conexion::conectar();    
       $usuarioDAO = new UsuarioDAO(Conexion::conectar());
        if(!isset($_GET['pagina'])){
            $pagina=0;
        }else{
            $pagina=filter_var($_GET['pagina'], FILTER_SANITIZE_NUMBER_INT);
        }
        $usuarios=$usuarioDAO -> obtenerPaginado($pagina);
        
    $usu2=$usuarioDAO -> obtenerPaginado($pagina+1);
    $sig=true;
          if(empty($usu2)){
             $sig=false ;
          }
        
        require 'vistas/administraUsuarios.php';
    }
    
    function hacerAdmin(){
            $conn = Conexion::conectar();    
       $usuarioDAO = new UsuarioDAO(Conexion::conectar());
       $id=filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $pagina=filter_var($_GET['pagina'], FILTER_SANITIZE_NUMBER_INT);
       $usu= $usuarioDAO->obtenerPorId($id);
       $usu->setRol("admin");
       $usuarioDAO->actualizar($usu);
       
        
                header('Location: index.php?action=adminUsu&pagina='.$pagina);
            die();
    }
    
    function selecMazo(){
         $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            require 'vistas/SeleccionMazo.php';
    }
    
    
    function verMazo(){
            $conn = Conexion::conectar();   
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                   $CartaDAO= new CartaDAO(Conexion::conectar());
            $MazoDAO= new MazoDAO(Conexion::conectar());
            $numero=0;
              if(isset($_GET['mazo'])){
                  
                 $numero=filter_var($_GET['mazo'], FILTER_SANITIZE_NUMBER_INT);
                  
              }
                              $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                                $mazo=new Mazo();
              switch ($numero){
                  case 1:
      
               
                           $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "melee");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                      $cartasposibles=$CartaDAO->obtenerTodasMazo($usuario, $mazo);
                      break;
                  case 2:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                      $cartasposibles=$CartaDAO->obtenerTodasMazo($usuario, $mazo);
                  break;
                  case 3:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                      $cartasposibles=$CartaDAO->obtenerTodasMazo($usuario, $mazo);
                   break;
                  case 4:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                      $cartasposibles=$CartaDAO->obtenerTodasMazo($usuario, $mazo);
                      break;
                  
              }
              
                require 'vistas/Mazos.php';
              
              
              }
              
              
              function  guardarMazo(){
                  $cartas=filter_var($_GET['cartas'], FILTER_SANITIZE_STRING);
                     $numero=filter_var($_GET['numero'], FILTER_SANITIZE_NUMBER_INT);
                  
                  $array = explode(",", $cartas);
                  
                    $conn = Conexion::conectar();   
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                   $CartaDAO= new CartaDAO(Conexion::conectar());
            $MazoDAO= new MazoDAO(Conexion::conectar());
         
                              $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                                $mazo=new Mazo();
              switch ($numero){
                  case 1:
      
               
                           $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "melee");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                             $cartas_borrar=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                                  foreach ($cartas_borrar as $cborrar){
                                      $MazoDAO->borrarCartaMazo($mazo->getId_mazo(), $cborrar->getId_carta());
                                  }
                                  
                                   for ($i=0 ; $i<count($array); $i++){
                                       $MazoDAO->insertarCartaMazo($mazo->getId_mazo(), $array[$i]);
                                   }   
                                  
                                  
                      break;
                  case 2:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                          $cartas_borrar=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                                  foreach ($cartas_borrar as $cborrar){
                                      $MazoDAO->borrarCartaMazo($mazo->getId_mazo(), $cborrar->getId_carta());
                                  }
                                   for ($i=0 ; $i<count($array); $i++){
                                       $MazoDAO->insertarCartaMazo($mazo->getId_mazo(), $array[$i]);
                                   }   
                  break;
                  case 3:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                           $cartas_borrar=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                                  foreach ($cartas_borrar as $cborrar){
                                      $MazoDAO->borrarCartaMazo($mazo->getId_mazo(), $cborrar->getId_carta());
                                  }
                                   for ($i=0 ; $i<count($array); $i++){
                                       $MazoDAO->insertarCartaMazo($mazo->getId_mazo(), $array[$i]);
                                   }   
                   break;
                  case 4:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                        $cartas_borrar=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                                  foreach ($cartas_borrar as $cborrar){
                                      $MazoDAO->borrarCartaMazo($mazo->getId_mazo(), $cborrar->getId_carta());
                                  }
                                   for ($i=0 ; $i<count($array); $i++){
                                       $MazoDAO->insertarCartaMazo($mazo->getId_mazo(), $array[$i]);
                                   }   
                      break;
                  
              }
                  
                  
                  
                  
              require 'vistas/inicio.php';
                  
              }
              function irSobreMi(){
                                      $conn = Conexion::conectar();   
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                  require 'vistas/SobreMi.php';
              }



              function verCartas(){
                    $conn = Conexion::conectar();   
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                   $CartaDAO= new CartaDAO(Conexion::conectar());
                         if(!isset($_GET['pagina'])){
            $pagina=0;
        }else{
            $pagina=filter_var($_GET['pagina'], FILTER_SANITIZE_NUMBER_INT);
        }
                      $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                         
                         $cartas=$CartaDAO->obtenerTodasUsuarioPaginado($usuario, $pagina);
                         
                         $cartas2=$CartaDAO->obtenerTodasUsuarioPaginado($usuario, $pagina+1);
                         
                           $sig=true;
          if(empty($cartas2)){
             $sig=false ;
          }
                         
                              require 'vistas/Cartas.php';    
              }
              
              
              function  verTienda(){
                  

                  
                   $conn = Conexion::conectar();   
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                   $CartaDAO= new CartaDAO(Conexion::conectar());
                   $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $MazoDAO= new MazoDAO(Conexion::conectar());
                               $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                         $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                       $MejoraDAO= new MejoraDAO(Conexion::conectar());
                        $tienda= new Tienda();
  $tienda=$usuarioDAO->obtenerTienda($usuario);

  
                     if($_SERVER['REQUEST_METHOD'] == 'GET'){
                         
                         if(isset($_GET['carta'])){
                           $idcarta=filter_var($_GET['carta'], FILTER_SANITIZE_NUMBER_INT);
                           $carta=$CartaDAO->obtenerCara($idcarta);
                           
                           if($usuario->getRol()=="admin"){
                               $CartaDAO->borrarCartaTienda($carta, $tienda);
                               $baraja=$usuarioDAO->obtenerBaraja($usuario);
                               $CartaDAO->insertarBarajaCartas($carta, $baraja->getId_baraja());
                           }else{
                               if($usuario->getGold()>=$carta->getPrecio()){
                                   $dinero=$usuario->getGold()-$carta->getPrecio();
                                   $usuario->setGold($dinero);
                                   $usuarioDAO->actualizar($usuario);
                                      $CartaDAO->borrarCartaTienda($carta, $tienda);
                               $baraja=$usuarioDAO->obtenerBaraja($usuario);
                               $CartaDAO->insertarBarajaCartas($carta, $baraja->getId_baraja());
                               }
                               
                               
                           }

                           
                         }
                         if(isset($_GET['mejora'])){
                               $idmejora=filter_var($_GET['mejora'], FILTER_SANITIZE_NUMBER_INT);
                               $mejora=$MejoraDAO->obtenerMejora($idmejora);
                                     if($usuario->getRol()=="admin"){
                                         $tipo=$mejora->getTipo();
                               switch ($tipo){
                                   case "vida":
                                       $vida=$personaje->getVida()+$mejora->getCantidad();
                                       $personaje->setVida($vida);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "defensa":
                                               $defensa=$personaje->getDefensa()+$mejora->getCantidad();
                                       $personaje->setDefensa($defensa);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "mazo":
                                       $mazo1=$MazoDAO->obtenerMazo($usuario->getId_usu(), "melee");
                                        $mazo2=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                                         $mazo3=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                                          $mazo4=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                                          $tamano=$mazo1->getTamano()+$mejora->getCantidad();
                                          $mazo1->setTamano($tamano);
                                          $mazo2->setTamano($tamano);
                                          $mazo3->setTamano($tamano);
                                          $mazo4->setTamano($tamano);
                                          $MazoDAO->actualizar($mazo1);
                                           $MazoDAO->actualizar($mazo2);
                                            $MazoDAO->actualizar($mazo3);
                                             $MazoDAO->actualizar($mazo4);
               
                                          break;
                                   case "mano":
                                               $mano=$personaje->getMano()+$mejora->getCantidad();
                                       $personaje->setMano($mano);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "mana":
                                               $mana=$personaje->getMana()+$mejora->getCantidad();
                                       $personaje->setMana($mana);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   
                                   
                               }
                                  $MejoraDAO->borrarMejora($mejora, $tienda);       
                      
                           }else{
                               if($usuario->getGold()>=$mejora->getPrecio()){
                                   $dinero=$usuario->getGold()-$mejora->getPrecio();
                                   $usuario->setGold($dinero);
                                   $usuarioDAO->actualizar($usuario);
                                    
                                    $tipo=$mejora->getTipo();
                               switch ($tipo){
                                   case "vida":
                                       $vida=$personaje->getVida()+$mejora->getCantidad();
                                       $personaje->setVida($vida);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "defensa":
                                               $defensa=$personaje->getDefensa()+$mejora->getCantidad();
                                       $personaje->setDefensa($defensa);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "mazo":
                                       $mazo1=$MazoDAO->obtenerMazo($usuario->getId_usu(), "melee");
                                        $mazo2=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                                         $mazo3=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                                          $mazo4=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                                          $tamano=$mazo1->getTamano()+$mejora->getCantidad();
                                          $mazo1->setTamano($tamano);
                                          $mazo2->setTamano($tamano);
                                          $mazo3->setTamano($tamano);
                                          $mazo4->setTamano($tamano);
                                          $MazoDAO->actualizar($mazo1);
                                           $MazoDAO->actualizar($mazo2);
                                            $MazoDAO->actualizar($mazo3);
                                             $MazoDAO->actualizar($mazo4);
               
                                          break;
                                   case "mano":
                                               $mano=$personaje->getMano()+$mejora->getCantidad();
                                       $personaje->setMano($mano);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   case "mana":
                                               $mana=$personaje->getMana()+$mejora->getCantidad();
                                       $personaje->setMana($mana);
                                       $PersonajeDAO->actualizar($personaje);
                                       
                                       
                                       break;
                                   
                                   
                               }
                                  $MejoraDAO->borrarMejora($mejora, $tienda);       
                      
                                   
                                   
                                   
                                   
                               }
                               
                               
                           }
                         }
                         
                     }
               
   $cartas=$CartaDAO->obtenerTiendaCartasLimite($usuario);
  $mejoras=$MejoraDAO->obtenerTodosTiendaLimite($tienda);
  $ncartas= sizeof($cartas);
  $nmejoras= sizeof($mejoras);
  require 'vistas/Tienda.php';   
                   
              }
              
              
              
              
              function verPersonaje(){
                   $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                 $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                          $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                         $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                         
                         require 'vistas/personaje.php';
              }
              
              
              
      
    }
    
    

