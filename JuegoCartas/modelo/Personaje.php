<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Personaje
 *
 * @author Usuario
 */
class Personaje {
    private $id_personaje;
    private $id_usu;
    private $vida;
    private $mana;
    private $defensa;
    private $mano;
    private $vida_combate;
    public function __construct() {
        
    }
    public function getVida_combate() {
        return $this->vida_combate;
    }

    public function setVida_combate($vida_combate): void {
        $this->vida_combate = $vida_combate;
    }

        
    public function getId_personaje() {
        return $this->id_personaje;
    }

    public function getId_usu() {
        return $this->id_usu;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getMana() {
        return $this->mana;
    }

    public function getDefensa() {
        return $this->defensa;
    }

    public function getMano() {
        return $this->mano;
    }

    public function setId_personaje($id_personaje): void {
        $this->id_personaje = $id_personaje;
    }

    public function setId_usu($id_usu): void {
        $this->id_usu = $id_usu;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setMana($mana): void {
        $this->mana = $mana;
    }

    public function setDefensa($defensa): void {
        $this->defensa = $defensa;
    }

    public function setMano($mano): void {
        $this->mano = $mano;
    }


    
}
