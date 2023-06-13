<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mazo
 *
 * @author Usuario
 */
class Mazo {
   private $id_mazo;
   private $id_usu;
   private $familia;
   private $tamano;
   
   public function __construct() {
       
   }
   public function getId_mazo() {
       return $this->id_mazo;
   }

   public function getId_usu() {
       return $this->id_usu;
   }

   public function getFamilia() {
       return $this->familia;
   }

   public function getTamano() {
       return $this->tamano;
   }

   public function setId_mazo($id_mazo): void {
       $this->id_mazo = $id_mazo;
   }

   public function setId_usu($id_usu): void {
       $this->id_usu = $id_usu;
   }

   public function setFamilia($familia): void {
       $this->familia = $familia;
   }

   public function setTamano($tamano): void {
       $this->tamano = $tamano;
   }


   
}
