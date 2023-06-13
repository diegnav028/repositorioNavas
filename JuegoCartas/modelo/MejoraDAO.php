<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MejoraDAO
 *
 * @author Usuario
 */
class MejoraDAO {
  private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
       public function obtenerTodos(){
        
        $sql = "select * "
            . "from mejoras "
                . "order by id_mejora ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $mejoras = array();
        
        while($mejora = $result -> fetch_object('Mejora')){
            
            $mejoras[] = $mejora;
            
        }
        
        return $mejoras;
            
    }
    
         public function obtenerTodosTienda(Tienda $t){
        
        $sql = "select M.* "
            . "from mejoras M, tienda_personajes T "
                . " where T.id_tienda=". $t->getId_tienda()
                . " and M.id_mejora=T.id_mejora"
                . " order by M.id_mejora ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $mejoras = array();
        
        while($mejora = $result -> fetch_object('Mejora')){
            
            $mejoras[] = $mejora;
            
        }
        
        return $mejoras;
            
    }
    
        public function obtenerTodosTiendaLimite(Tienda $t){
        
        $sql = "select M.* "
            . "from mejoras M, tienda_personajes T "
                . " where T.id_tienda=". $t->getId_tienda()
                . " and M.id_mejora=T.id_mejora"
                . " order by M.id_mejora "
                . " limit 4";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $mejoras = array();
        
        while($mejora = $result -> fetch_object('Mejora')){
            
            $mejoras[] = $mejora;
            
        }
        
        return $mejoras;
            
    }
    
      public function obtenerMejora(int $id_mejora){
        
        $sql = "select * "
            . "from mejoras "
                . " where id_mejora=? ";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
       $stmt -> bind_param('i', $id_mejora);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $Mejora = $result -> fetch_object('Mejora');
        
        return $Mejora;
            
    }
    
     public function insertarMejora(Mejora $m, Tienda $t) {
          $sql = "insert into tienda_personajes(id_tienda,id_mejora) "
            . "values (?,?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $id_tienda=$t->getId_tienda();
        $id_mejora=$m->getId_mejora();
        
         $stmt -> bind_param('ii', $id_tienda, $id_mejora);
           
        $stmt -> execute();
        
        
    }
    
              public function borrarMejora(Mejora $m, Tienda $t){
        
        $sql = "delete from tienda_personajes "
            . "where id_tienda = ? and id_mejora= ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
       $id_tienda=$t->getId_tienda();
        $id_mejora=$m->getId_mejora();
        
         $stmt -> bind_param('ii', $id_tienda, $id_mejora);
           
        $stmt -> execute();
        
          }
          
    
    
    
    
}
