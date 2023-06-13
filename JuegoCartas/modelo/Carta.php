<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Carta
 *
 * @author Usuario
 */
class Carta {
    private $id_carta;
    private $nombre;
    private $familia;
    private $clave1;
    private $clave2;
    private $clave3;
    private $multiataque;
    private $mana;
    private $descripcion;
    private $ataque;
    private $turnos;
    private $tipo;
    private $rareza;
    private $tienda;
    private $foto;
    private $precio;
    
    public function __construct() {
        
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

        
    public function getId_carta() {
        return $this->id_carta;
    }

    public function getFamilia() {
        return $this->familia;
    }

    public function getClave1() {
        return $this->clave1;
    }

    public function getClave2() {
        return $this->clave2;
    }

    public function getClave3() {
        return $this->clave3;
    }

    public function getMultiataque() {
        return $this->multiataque;
    }

    public function getMana() {
        return $this->mana;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getTurnos() {
        return $this->turnos;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getRareza() {
        return $this->rareza;
    }

    public function getTienda() {
        return $this->tienda;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setId_carta($id_carta): void {
        $this->id_carta = $id_carta;
    }

    public function setFamilia($familia): void {
        $this->familia = $familia;
    }

    public function setClave1($clave1): void {
        $this->clave1 = $clave1;
    }

    public function setClave2($clave2): void {
        $this->clave2 = $clave2;
    }

    public function setClave3($clave3): void {
        $this->clave3 = $clave3;
    }

    public function setMultiataque($multiataque): void {
        $this->multiataque = $multiataque;
    }

    public function setMana($mana): void {
        $this->mana = $mana;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }

    public function setTurnos($turnos): void {
        $this->turnos = $turnos;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setRareza($rareza): void {
        $this->rareza = $rareza;
    }

    public function setTienda($tienda): void {
        $this->tienda = $tienda;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }



}
