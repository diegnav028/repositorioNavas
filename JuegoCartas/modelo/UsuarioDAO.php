<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UsuarioDAO
 *
 * @author Usuario
 */
class UsuarioDAO {
  
      private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
     public function insertar(Usuario $u){
 
        $sql = "insert into usuarios(nick, email, contrasena, fecha_naci, rol, piso, gold, victorias) "
            . "values (?, ?, ?, ?, ?, ?, ?, ?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $nick = $u ->getNick();
        $email = $u ->getEmail();
        $contras = $u ->getContrasena() ;
        $fecha_naci= $u ->getFecha_naci();
        $rol= $u->getRol();
        $piso= $u->getPiso();
        $gold= $u->getGold();
        $victorias= $u->getVictorias();
    
        
        $stmt -> bind_param('sssssiii',$nick, $email, $contras, $fecha_naci, $rol, $piso, $gold, $victorias);
        $stmt -> execute();
            
    }
         public function actualizar(Usuario $u){
        
        $sql = "update usuarios "
            . "set rol=?, piso=?, gold=?, victorias=?"
            . " where id_usu = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
      $rol=$u->getRol();
      $id_usu=$u->getId_usu();
       $piso=$u->getPiso();
       $gold=$u->getGold();
       $victorias=$u->getVictorias();
        
        $stmt -> bind_param('siiii', $rol,$piso,$gold,$victorias, $id_usu);
        $stmt -> execute();
            
    }
    
    
    public function obtenerPorEmail($email) {
        
        $sql = "select * "
            . "from usuarios "
            . "where email = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
            die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $stmt -> bind_param('s', $email);
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $usuario = $result -> fetch_object('Usuario');
        
        return $usuario;
    
    }
    
       public function obtenerPorId($id) {
        
        $sql = "select * "
            . "from usuarios "
            . "where id_usu = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
            die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                 
        }
        
        $stmt -> bind_param('i', $id);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $usuario = $result -> fetch_object('Usuario');
        
        return $usuario;
    
    }
    
    public function generarBaraja(Usuario $u) {
          $sql = "insert into baraja(id_usu) "
            . "values (?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $id=$u->getId_usu();
        
         $stmt -> bind_param('i', $id);
           
        $stmt -> execute();
        
        
    }
        public function generarTienda(Usuario $u) {
          $sql = "insert into tiendas(id_usu) "
            . "values (?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $id=$u->getId_usu();
        
         $stmt -> bind_param('i', $id);
           
        $stmt -> execute();
        
        
    }
          public function obtenerTienda(Usuario $u) {
        
        $sql = "select * "
            . "from tiendas "
            . "where id_usu = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
            die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                 
        }
      $id=$u->getId_usu();
        
         $stmt -> bind_param('i', $id);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $tienda = $result -> fetch_object('Tienda');
        
        return $tienda;
    
    }
              public function obtenerBaraja(Usuario $u) {
        
        $sql = "select * "
            . "from baraja"
            . " where id_usu = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
            die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                 
        }
      $id=$u->getId_usu();
        
         $stmt -> bind_param('i', $id);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $baraja = $result -> fetch_object('Baraja');
        
        return $baraja;
    
    }
    
     public function obtenerPaginado(int $pagina){
        
        
        $sql = "select * "
            . "from usuarios "
                . "order by id_usu "
                  . "limit " . $pagina*5 .",5 ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $usuarios = array();
        
        while($usuario = $result -> fetch_object('Usuario')){
            
            $usuarios[] = $usuario;
            
        }
        
        return $usuarios;
            
    }
    
    
    
    
}
