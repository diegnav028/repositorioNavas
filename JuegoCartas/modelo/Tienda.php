<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Tienda
 *
 * @author Usuario
 */
class Tienda {
    private $id_tienda;
    private $id_usu;
    
    public function __construct() {
        
    }

    public function getId_tienda() {
        return $this->id_tienda;
    }

    public function getId_usu() {
        return $this->id_usu;
    }

    public function setId_tienda($id_tienda): void {
        $this->id_tienda = $id_tienda;
    }

    public function setId_usu($id_usu): void {
        $this->id_usu = $id_usu;
    }


}
