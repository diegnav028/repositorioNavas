<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PersonajeDAO
 *
 * @author Usuario
 */
class PersonajeDAO {
 private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
     public function insertar(Personaje $p){
 
 
        $sql = "insert into personajes(id_usu,vida,mana,defensa,mano,vida_combate) "
            . "values (?, ?, ?, ? ,?,?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
    
   $id_usu=$p->getId_usu();
    $vida=$p->getVida();
    $mana=$p->getMana();
   $defensa=$p->getDefensa();
    $mano=$p->getMano();
    $vida_combate=$p->getVida_combate();
    
        
        $stmt -> bind_param('iiiiii',$id_usu,$vida,$mana,$defensa,$mano,$vida_combate);
        $stmt -> execute();
            
    }
    
       public function actualizar(Personaje $p){
        
        $sql = "update personajes "
            . "set vida=?, mana=?, defensa=?, mano=?, vida_combate=?"
            . " where id_personaje = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
    $id_personaje=$p->getId_personaje();
    $vida=$p->getVida();
    $mana=$p->getMana();
   $defensa=$p->getDefensa();
    $mano=$p->getMano();
       $vida_combate=$p->getVida_combate();
        
        $stmt -> bind_param('iiiiii', $vida,$mana,$defensa,$mano,$vida_combate, $id_personaje);
        $stmt -> execute();
            
    }
    
        public function borrar(Personaje $p){
        
        $sql = "delete from personajes "
            . "where id_personaje = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
      $id_personaje=$p->getId_personaje();
  
   
       
        
        $stmt -> bind_param('i', $id_personaje);
        $stmt -> execute();
            
    }
    
     public function obtenerPersonaje(int $id_usu ){
        
        $sql = "select * "
            . "from personajes"
                . " where id_usu=? ";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
       $stmt -> bind_param('i', $id_usu);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $personaje = $result -> fetch_object('Personaje');
        
        return $personaje;
            
    }
    
     
    
    
}
