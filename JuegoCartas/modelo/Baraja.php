<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Baraja
 *
 * @author Usuario
 */
class Baraja {
  private $id_baraja;
  private $id_usu;
  
  public function __construct() {
      
  }
  public function getId_baraja() {
      return $this->id_baraja;
  }

  public function getId_usu() {
      return $this->id_usu;
  }

  public function setId_baraja($id_baraja): void {
      $this->id_baraja = $id_baraja;
  }

  public function setId_usu($id_usu): void {
      $this->id_usu = $id_usu;
  }


  
}
