<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author Usuario
 */
class Usuario {
    private $id_usu;
    private $nick;
    private $email;
    private $contrasena;
    private $fecha_naci;
    private $rol;
    private $piso;
    private $gold;
    private $victorias;
    
    public function __construct() {
        
    }
    
    public function getId_usu() {
        return $this->id_usu;
    }

    public function getNick() {
        return $this->nick;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getFecha_naci() {
        return $this->fecha_naci;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getPiso() {
        return $this->piso;
    }

    public function getGold() {
        return $this->gold;
    }

    public function getVictorias() {
        return $this->victorias;
    }

    public function setId_usu($id_usu): void {
        $this->id_usu = $id_usu;
    }

    public function setNick($nick): void {
        $this->nick = $nick;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function setFecha_naci($fecha_naci): void {
        $this->fecha_naci = $fecha_naci;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function setPiso($piso): void {
        $this->piso = $piso;
    }

    public function setGold($gold): void {
        $this->gold = $gold;
    }

    public function setVictorias($victorias): void {
        $this->victorias = $victorias;
    }



}
