<?php
/*
 * Error -- Clase de errores 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
 
namespace Core;
// use Core\Language;
// use \Language;

class Error
{

  /*
  *$_numError: varible tipo entero
  *$_errorVal: varible
  */
  private $_numError;
  private $_errorVal = array();
  // private $arrayError = array();

    
  public function setNumError($_value,$_lang,$_num) {
    $this->_numError = $_value;
  }
  
  public function getNumError() {
      return $this->_numError;
  }
  
  public function setTypeLanguage() {
    return $this->_typeLanguage();
  }
  
  
  /*
  *setErrorValue: funcion para guardar errores
  */
  public function setErrorValue($_nomenclature, $_errorCode = true, $_language = LANG_ERROR, $_txtErrorConcat = null){
    global $arrayError;
    require_once ROOT . 'libs' . DS . 'error' . DS . 'error.php';
    if($_errorCode) {
      $this->_errorVal[] = $arrayError['ERROR'][$_language][$_nomenclature].$_txtErrorConcat;
    }else{
      $this->_errorVal[] = $_nomenclature;
    }
      
  }
  
  /*
  *getErrorArray : retornar arreglo con los errores
  */
  public function getErrorArray(){
    $array = $this->_errorVal;
    $this->_errorVal = array();
    return $array;
  }
  
  
  public function saveTmp() {
    // $language = new Language();
    require_once ROOT . 'libs' . DS . 'error' . DS . 'error.php';
    end($_SESSION["ERROR"]);
		$cont = key($_SESSION["ERROR"]) + 1;
		$_SESSION["ERROR"][$cont][] = $arrayError['ERROR'][$language->getTypeLanguage()][$this->getNumError()]; 
  }
}

