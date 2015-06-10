<?php
namespace Core;

/*
 * Language -- Clase para lenguajes 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
// use Core\Main;

class Language
{
    public $typeLanguage;
    
    public function setTypeLanguage($varLenguage) {
      $this->typeLanguage = $varLenguage;
    }
    
    public function  getTypeLanguage() {
      return $this->typeLanguage;
    }
   
}