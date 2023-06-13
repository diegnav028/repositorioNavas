<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mejora
 *
 * @author Usuario
 */
class Mejora {
    private $id_mejora;
    private $tipo;
    private $cantidad;
    private $precio;
    private $foto;
    
    public function __construct() {
        
    }

    public function getId_mejora() {
        return $this->id_mejora;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId_mejora($id_mejora): void {
        $this->id_mejora = $id_mejora;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setCantidad($canidad): void {
        $this->cantidad = $cantidad;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }


}
