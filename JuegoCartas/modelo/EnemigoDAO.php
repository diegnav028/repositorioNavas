<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EnemigoDAO
 *
 * @author Usuario
 */
class EnemigoDAO {
      private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
     public function insertar(Enemigo $c){
    

        $sql = "insert into enemigos(ataque1,dano1,descripcion1,ataque2,dano2,descripcion2,ataque3,dano3,descripcion3,vida"
                . "boss,dificultad,foto,tipo,clave) "
            . "values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
           
    $ataque1 =$c->getAtaque1();
    $dano1=$c->getDano1();
    $descripcion1=$c->getDescripcion1();
    $ataque2=$c->getAtaque2();
    $dano2=$c->getDano2();
    $descripcion2=$c->getDescripcion2();
    $ataque3=$c->getAtaque3();
    $dano3=$c->getDano3();
    $descripcion3=$c->getDescripcion3();
    $vida=$c->getVida();
    $boss=$c->getBoss();
    $dificultad=$c->getDificultad();
    $foto=$c->getFoto();
    $tipo=$c->getTipo();
    $clave=$c->getClave();
    
  
    
    
        
        $stmt -> bind_param('sississisiiisss',$ataque1,$dano1,$descripcion1,$ataque2,$dano2,$descripcion2
                ,$ataque3,$dano3,$descripcion3,$vida,$boss,$dificultad,$foto,$tipo,$clave);
        $stmt -> execute();
            
    }
    
    
     public function obtenerTodos(){
        
        $sql = "select * "
            . "from enemigos"
                . " order by id_enemigo ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $enemigo = array();
        
        while($enemigo = $result -> fetch_object('Enemigo')){
            
            $enemigos[] = $enemigo;
            
        }
        
        return $enemigos;
            
    }
       public function obtenerTodosDificultad(int $dif){
        
        $sql = "select * "
            . "from enemigos where boss=0 and dificultad <=".$dif
                . " order by id_enemigo desc "
                . " limit 5";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $enemigo = array();
        
        while($enemigo = $result -> fetch_object('Enemigo')){
            
            $enemigos[] = $enemigo;
            
        }
        
        return $enemigos;
            
    }
           public function obtenerTodosBoss(int $dif){
        
        $sql = "select * "
            . "from enemigos where boss=1 and dificultad <=".$dif
                . " order by id_enemigo ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $enemigo = array();
        
        while($enemigo = $result -> fetch_object('Enemigo')){
            
            $enemigos[] = $enemigo;
            
        }
        
        return $enemigos;
            
    }
    
    
}
