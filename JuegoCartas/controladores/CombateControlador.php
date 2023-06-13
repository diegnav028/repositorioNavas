<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CombateControlador
 *
 * @author Usuario
 */
class CombateControlador {
    function nuevaExpedicion(){
          $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                 $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
            if(isset($_GET['mazo'])){
             
                   $CartaDAO= new CartaDAO(Conexion::conectar());
                   $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $MazoDAO= new MazoDAO(Conexion::conectar());
                               
                         $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                         $personaje->setVida_combate($personaje->getVida());
                          $usuario->setPiso(1);
                         $PersonajeDAO->actualizar($personaje);
                          $usuarioDAO->actualizar($usuario);
                              
                              $existe=$MazoDAO->obtenerMazo($usuario->getId_usu(), "combate");
                              
                           
                                  $cartas_borrar=$MazoDAO->obtenerTodosCartaMazo($existe->getId_mazo());
                                  foreach ($cartas_borrar as $cborrar){
                                      $MazoDAO->borrarCartaMazo($existe->getId_mazo(), $cborrar->getId_carta());
                                  }
                        
                              
                              
                              
                   
                 $numero=filter_var($_GET['mazo'], FILTER_SANITIZE_NUMBER_INT);
                  
              
                 
              switch ($numero){
                  case 1:
      
               
                           $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "melee");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                foreach ($cartasmazo as $cinsertar){
                $MazoDAO->insertarCartaMazo($existe->getId_mazo(), $cinsertar->getId_carta());
                    
                }
                      break;
                  case 2:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "gun");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                  foreach ($cartasmazo as $cinsertar){
                $MazoDAO->insertarCartaMazo($existe->getId_mazo(), $cinsertar->getId_carta());
                    
                }
                  break;
                  case 3:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "psi");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                  foreach ($cartasmazo as $cinsertar){
                $MazoDAO->insertarCartaMazo($existe->getId_mazo(), $cinsertar->getId_carta());
                    
                }
                   break;
                  case 4:
                            $mazo=$MazoDAO->obtenerMazo($usuario->getId_usu(), "cyber");
                      $cartasmazo=$MazoDAO->obtenerTodosCartaMazo($mazo->getId_mazo());
                    foreach ($cartasmazo as $cinsertar){
                $MazoDAO->insertarCartaMazo($existe->getId_mazo(), $cinsertar->getId_carta());
                    
                }
                      break;
                  
              }
              $this->nuevoCombate();   
            }else{
                require 'vistas/SeleccionMazoCombate.php';
            }           
                         
    }
    function continuarExpedicion(){
        $this->nuevoCombate();
    }
    function nuevoCombate(){
             $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                 $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
        
                   $CartaDAO= new CartaDAO(Conexion::conectar());
                   $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $MazoDAO= new MazoDAO(Conexion::conectar());
                       $EnemigoDAO= new EnemigoDAO($conn);        
                         $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
            $existe=$MazoDAO->obtenerMazo($usuario->getId_usu(), "combate");
        $cartas=$MazoDAO->obtenerTodosCartaMazo($existe->getId_mazo());
      
        $boss=0;
        if($usuario->getPiso()%5!=0){
                $enemigos=$EnemigoDAO->obtenerTodosDificultad($usuario->getPiso());
        }else{
            $enemigos=$EnemigoDAO->obtenerTodosBoss($usuario->getPiso());
        $boss=1;
            
        }
 
        $numero= rand(0, count($enemigos)-1);
      
            $enemigo1=$enemigos[$numero];
      
            require 'vistas/Combate.php';
        
    }
    function victoria(){
                         $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                                 
                                         $usuario->setGold($usuario->getGold()+5);
                                     $usuario->setVictorias($usuario->getVictorias()+1);
           $usuario->setPiso(0);
      
        $usuarioDAO->actualizar($usuario);
         $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                         $personaje->setVida_combate($personaje->getVida());
                         $PersonajeDAO->actualizar($personaje);
                         require 'vistas/Victoria.php';
    }
    function derrota(){
                                 $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                                 
                                    
                                     
           $usuario->setPiso(0);
      
        $usuarioDAO->actualizar($usuario);
         $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                         $personaje->setVida_combate($personaje->getVida());
                         $PersonajeDAO->actualizar($personaje);
                         require 'vistas/Derrota.php';
    }
    function cartaVictoria(){
           if(isset($_GET['vida'])){
               $vida=filter_var($_GET['vida'], FILTER_SANITIZE_NUMBER_INT);
           }
             if(isset($_GET['carta'])){
               $carta=filter_var($_GET['carta'], FILTER_SANITIZE_NUMBER_INT);
           }
                    $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
            $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
                                     if($usuario->getPiso()%5==0){
                                         $usuario->setGold($usuario->getGold()+1);
                                     }
           $usuario->setPiso($usuario->getPiso()+1);
      
        $usuarioDAO->actualizar($usuario);
         $PersonajeDAO= new PersonajeDAO($conn);
                   $personaje= new Personaje();
                     $personaje=$PersonajeDAO->obtenerPersonaje($usuario->getId_usu());
                     if($vida<=$personaje->getVida()){
                               $personaje->setVida_combate($vida);
                     }else{
                          $personaje->setVida_combate($personaje->getVida());
                     }
                   
                         $PersonajeDAO->actualizar($personaje);
                            $MazoDAO= new MazoDAO(Conexion::conectar());
                              $existe=$MazoDAO->obtenerMazo($usuario->getId_usu(), "combate");
                              $MazoDAO->insertarCartaMazo($existe->getId_mazo(), $carta);
                              $this->nuevoCombate();
    }
    function finalizarCombate(){
           if(isset($_GET['vida'])){
               $vida=filter_var($_GET['vida'], FILTER_SANITIZE_NUMBER_INT);
           }
               $conn = Conexion::conectar();  
          $usuarioDAO = new UsuarioDAO(Conexion::conectar());
                 $usuario=new Usuario();
                         $usuario= $usuarioDAO->obtenerPorEmail($_SESSION['email']);
        
                   $CartaDAO= new CartaDAO(Conexion::conectar());
                   $cartas=$CartaDAO->obtenerTodasUsuario($usuario);
               $numero= rand(0, count($cartas)-1);
               $carta1=$cartas[$numero];
                $numero= rand(0, count($cartas)-1);
               $carta2=$cartas[$numero];
                $numero= rand(0, count($cartas)-1);
               $carta3=$cartas[$numero];
                   
               if($usuario->getPiso()==20){
                   $this->victoria();
               }else{
                     require 'vistas/SeleccionMazoVictoria.php'; 
               }
             
           
           
    }
    
}
