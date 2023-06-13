<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CartaDAO
 *
 * @author Usuario
 */
class CartaDAO {
   private $conn;
    
    public function __construct($conn){
        
        $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);

        if(!$conn instanceof mysqli){
                
            return false;

        }
            
        $this -> conn = $conn; 
            
    }
    
     public function insertar(Carta $c){
  
        $sql = "insert into cartas(nombre,familia,clave1,clave2,clave3,multiataque,mana,descripcion,ataque,turnos,tipo,rareza,tienda,foto,precio) "
            . " values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
            
   $familia= $c ->getFamilia();
   $nombre=$c->getNombre();
    $clave1= $c ->getClave1();
     $clave2= $c->getClave2();
     $clave3= $c->getClave3();
    $multiataque= $c ->getMultiataque();
    $mana= $c ->getMana();
     $descripcion= $c ->getDescripcion();
     $ataque= $c ->getAtaque();
    $turnos= $c->getTurnos();
     $tipo= $c->getTipo();
   $rareza= $c->getRareza();
    $tienda= $c->getTienda();
   $foto= $c->getFoto();
     $precio= $c->getPrecio();
    
    
        
        $stmt -> bind_param('ssiiiiisiisiisi',$nombre,$familia,$clave1,$clave2,$clave3,$multiataque,$mana,$descripcion,$ataque,$turnos
                ,$tipo,$rareza,$tienda,$foto,$precio);
        $stmt -> execute();
            
    }
    
       public function actualizar(Carta $c){
        
        $sql = "update cartas "
            . "set multiataque= ?, descripcion=?, mana=?, ataque=?, turnos=?, precio=?"
            . " where id_carta = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
      $id_carta= $c->getId_carta();
    $multiataque= $c ->getMultiataque();
    $mana= $c ->getMana();
     $descripcion= $c ->getDescripcion();
     $ataque= $c ->getAtaque();
    $turnos= $c->getTurnos();
    
     $precio= $c->getPrecio();
       
        
        $stmt -> bind_param('isiiiii', $multiataque, $descripcion, $mana, $ataque, $turnos, $precio,$id_carta);
        $stmt -> execute();
            
    }
    
        public function borrar(Carta $c){
        
        $sql = "delete from cartas "
            . "where id_carta = ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
     $id_carta= $c->getId_carta();
        
        $stmt -> bind_param('i', $id_carta);
        $stmt -> execute();
            
    }
     public function obtenerTodos(){
        
        $sql = "select * "
            . "from cartas "
                . "order by id_carta ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
     public function obtenerTodosNoTienda(){
        
        $sql = "select * "
            . "from cartas where tienda=0 "
                . "order by id_carta ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
    
     public function obtenerTodosTienda(){
        
        $sql = "select * "
            . "from cartas where tienda=1 "
                . " order by id_carta ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
         public function obtenerTiendaCartas(Usuario $u){
        
        $sql = "select C.* "
            . "from cartas C, tiendas T, usuarios U, tienda_cartas P "
                . "where T.id_usu=U.id_usu and P.id_tienda=T.id_tienda and P.id_carta=C.id_carta"
                . " and U.id_usu= ". $u->getId_usu() 
                . " order by P.id_tiendacartas ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
           public function obtenerTiendaCartasLimite(Usuario $u){
        
        $sql = "select C.* "
            . "from cartas C, tiendas T, usuarios U, tienda_cartas P "
                . "where T.id_usu=U.id_usu and P.id_tienda=T.id_tienda and P.id_carta=C.id_carta"
                . " and U.id_usu= ". $u->getId_usu() 
                . " order by P.id_tiendacartas "
                . " limit 4";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
            public function obtenerTodasUsuario(Usuario $u){
        
        $sql = "select C.* "
            . "from cartas C, baraja T, usuarios U, baraja_cartas B "
                . "where T.id_usu=U.id_usu and B.id_baraja=T.id_baraja and B.id_carta=C.id_carta"
                . "  and U.id_usu= ". $u->getId_usu() 
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
    
              public function obtenerTodasUsuarioPaginado(Usuario $u, int $pagina){
        
        $sql = "select C.* "
            . "from cartas C, baraja T, usuarios U, baraja_cartas B "
                . "where T.id_usu=U.id_usu and B.id_baraja=T.id_baraja and B.id_carta=C.id_carta"
                . " and U.id_usu= ". $u->getId_usu() 
                . " order by C.id_carta "
                . "limit " . $pagina*20 .",20 ";
        
        if(!$result = $this -> conn ->query($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
        $cartas = array();
        
        while($carta = $result -> fetch_object('Carta')){
            
            $cartas[] = $carta;
            
        }
        
        return $cartas;
            
    }
    
    
    
        public function insertarBarajaCartas(Carta $c,int $id_baraja) {
          $sql = "insert into baraja_cartas(id_carta,id_baraja) "
            . "values (?,?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $id=$c->getId_carta();
        
         $stmt -> bind_param('ii', $id, $id_baraja);
           
        $stmt -> execute();
        
        
    }
    
         public function insertarTiendaCarta(Carta $c, Tienda $t) {
          $sql = "insert into tienda_cartas (id_carta,id_tienda) "   
            . "values (?,?)";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        $id=$c->getId_carta();
        $id_tienda= $t->getId_tienda();
        
         $stmt -> bind_param('ii', $id, $id_tienda);
           
        $stmt -> execute();
        
        
    }
          public function borrarCartaTienda(Carta $c, Tienda $t){
        
        $sql = "delete from tienda_cartas "
            . "where id_carta = ? and id_tienda= ?";
        
        if(!$stmt = $this -> conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
      $id=$c->getId_carta();
        $id_tienda= $t->getId_tienda();
        
         $stmt -> bind_param('ii', $id, $id_tienda);
           
        $stmt -> execute();
        
        
          }
          
          
                    public function obtenerTodasMazo(Usuario $u, Mazo $m){
        
        $sql = "select C.* "
            . "from cartas C, baraja T, usuarios U, baraja_cartas B "
                . "where T.id_usu=U.id_usu and B.id_baraja=T.id_baraja and B.id_carta=C.id_carta"
                . " and U.id_usu= ". $u->getId_usu() . " and C.familia= "."'".($m->getFamilia())."'"
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
          
           public function obtenerCara(int $id_carta){
        
        $sql = "select * "
            . " from cartas"
                . " where id_carta=? ";
        
        if(!$stmt = $this ->conn -> prepare($sql)){
                
                die("Error al ejecutar la sentencia: " . $this -> conn -> error);
                
        }
        
       $stmt -> bind_param('i', $id_carta);
           
        $stmt -> execute();
        
        $result = $stmt -> get_result();
        
        $carta = $result -> fetch_object('Carta');
        
        return $carta;
            
    }
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
}
