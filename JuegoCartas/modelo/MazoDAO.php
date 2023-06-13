<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MazoDAO
 *
 * @author Usuario
 */
class MazoDAO {
    
   private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
     public function insertar(Mazo $m){

 
        $sql = "insert into mazos(id_usu,familia,tamano) "
            . "values (?, ?, ?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
            
 $id_usu=$m->getId_usu();
  $familia=$m->getFamilia();
   $tamano=$m->getTamano();
    
        
        $stmt -> bind_param('isi',$id_usu,$familia,$tamano);
        $stmt -> execute();
            
    }
    
       public function actualizar(Mazo $m){
        
        $sql = "update mazos "
            . "set tamano=?"
            . " where id_mazo = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
    $id_mazo=$m->getId_mazo();
  
   $tamano=$m->getTamano();
       
        
        $stmt -> bind_param('ii', $tamano,$id_mazo);
        $stmt -> execute();
            
    }
    
        public function borrar(Mazo $m){
        
        $sql = "delete from mazos "
            . "where id_mazo = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
      $id_mazo=$m->getId_mazo();
  
   
       
        
        $stmt -> bind_param('i', $id_mazo);
        $stmt -> execute();
            
    }
    
       public function insertarCartaMazo(int $id_mazo,int $id_carta){

 
        $sql = "insert into carta_mazos(id_mazo,id_carta) "
            . "values (?, ?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
            

    
        
        $stmt -> bind_param('ii',$id_mazo,$id_carta);
        $stmt -> execute();
            
    }
    
        public function borrarCartaMazo(int $id_mazo,int $id_carta){
        
        $sql = "delete from carta_mazos "
            . "where id_mazo=? and id_carta = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
     
  
   
       
        
        $stmt -> bind_param('ii', $id_mazo,$id_carta);
        $stmt -> execute();
         
    
}
  public function obtenerMazo(int $id_usu, string $familia){
        
        $sql = "select * "
            . "from mazos"
                . " where id_usu= ?  and familia= ?" ;
        
         if(!$stmt = $this -> conn -> prepare($sql)){
                
            die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
       $stmt -> bind_param('is', $id_usu, $familia);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $mazo = $result -> fetch_object('Mazo');
        
        return $mazo;
            
    }

     public function obtenerTodosCartaMazo(int $id_mazo){
        
        $sql = "select C.* "
            . "from carta_mazos M,cartas C "
                . "where M.id_carta=C.id_carta and M.id_mazo=".$id_mazo
                . " order by C.id_carta ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }






}
