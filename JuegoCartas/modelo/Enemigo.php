<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Enemigo
 *
 * @author Usuario
 */
class Enemigo {
    private $id_enemigo;
    private $ataque1;
    private $dano1;
    private $descripcion1;
    private $ataque2;
    private $dano2;
    private $descripcion2;
    private $ataque3;
    private $dano3;
    private $descripcion3;
    private $vida;
    private $boss;
    private $dificultad;
    private $foto;
    private $tipo;
    private $clave;
    
    public function __construct() {
        
    }
    public function getId_enemigo() {
        return $this->id_enemigo;
    }
    public function getDano2() {
        return $this->dano2;
    }

    public function setDano2($dano2): void {
        $this->dano2 = $dano2;
    }

        public function getAtaque1() {
        return $this->ataque1;
    }

    public function getDano1() {
        return $this->dano1;
    }

    public function getDescripcion1() {
        return $this->descripcion1;
    }

    public function getAtaque2() {
        return $this->ataque2;
    }

    public function getDescripcion2() {
        return $this->descripcion2;
    }

    public function getAtaque3() {
        return $this->ataque3;
    }

    public function getDano3() {
        return $this->dano3;
    }

    public function getDescripcion3() {
        return $this->descripcion3;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getBoss() {
        return $this->boss;
    }

    public function getDificultad() {
        return $this->dificultad;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setId_enemigo($id_enemigo): void {
        $this->id_enemigo = $id_enemigo;
    }

    public function setAtaque1($ataque1): void {
        $this->ataque1 = $ataque1;
    }

    public function setDano1($dano1): void {
        $this->dano1 = $dano1;
    }

    public function setDescripcion1($descripcion1): void {
        $this->descripcion1 = $descripcion1;
    }

    public function setAtaque2($ataque2): void {
        $this->ataque2 = $ataque2;
    }

    public function setDescripcion2($descripcion2): void {
        $this->descripcion2 = $descripcion2;
    }

    public function setAtaque3($ataque3): void {
        $this->ataque3 = $ataque3;
    }

    public function setDano3($dano3): void {
        $this->dano3 = $dano3;
    }

    public function setDescripcion3($descripcion3): void {
        $this->descripcion3 = $descripcion3;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setBoss($boss): void {
        $this->boss = $boss;
    }

    public function setDificultad($dificultad): void {
        $this->dificultad = $dificultad;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setClave($clave): void {
        $this->clave = $clave;
    }


    
}
