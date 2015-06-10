<?php
namespace Core;
use Core\ClassDB;
use \PDO;
use Core\Error;
use Core\Session;

  /*
   * Util -- Clase para general de utilidades
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
   */
   
class Util 
{
    
    private $_arrayVars;
    private $_pageCurrent;
    private $_rankPagination;
    private $_limitRow;
    private $_sqlNumRows;
    private $_sqlRows;
    
    public function __construct() {
      $this->_arrayVars = array();
    }
    
    public  function setPageCurrent($value = 1) {
      $this->_pageCurrent = is_int($value) ? $value:1;
    }
    
    public function getPageCurrent() {
      return $this->_pageCurrent;
    }
    
    public function setRankPagination($value = RANK_PAGINATION) {
      $this->_rankPagination = is_int($value) ? $value:RANK_PAGINATION;
    }
    
    public function getRankPagination() {
      return $this->_rankPagination;
    }
    
    public function setLimitRow($value = LIMIT_ROW) {
      $this->_limitRow = is_int($value) ? $value : LIMIT_ROW;
    }
    
    public function getLimitRow() {
      return $this->_limitRow;
    }
    
    public function setSqlNumRows($value = null) {
        $this->_sqlNumRows = $value;
    }
    public function getSqlNumRows() {
        return $this->_sqlNumRows;
    }
    
    public function setSqlRows($value = null) {
      $this->_sqlRows = $value;
    }
    
    public function getSqlRows(){
      return $this->_sqlRows;
    }


    /******************************
    Funcion: setVar
    Objetivo: asignar valores
    *******************************/
    public function setVar($_psName, $_psValue) {
      if(!isset($this->_arrayVars[$_psName])) {
        if($_psValue) {
          $_psValue = trim($_psValue);
          $_psValue = strip_tags($_psValue);
        }
        
        $this->_arrayVars[$_psName] = $_psValue;
      }
    }
    
    /**************************************
    Funcion: getVar
    Objetivo: retonar valores de variables
    ***************************************/
    public function getVar($_psName) {
      if(isset($this->_arrayVars[$_psName])) {
        return $this->_arrayVars[$_psName];
      }
    }
    // public function setTypeLanguage($varLenguage) {
      // $this->typeLanguage = $varLenguage;
    // }
    
    // public function  getTypeLanguage() {
      // return $this->typeLanguage;
    // }
    
    public function validateInteger($_integer, $min = 0, $_max = 999) {
    
        $_range = array (
            "options" => array
            ( "min_range" => $_min, "max_range" => $_max)
        );
 
        filter_var($_integer, FILTER_VALIDATE_INT, $_range) ? $_result = TRUE : $result = FALSE;
        return $_result;
    }
    
    function validateString($_string,$_required = true, $_minChars = 1, $_maxCharts = 255){
      $_data = (strlen($_string) > $_maxChars) ? false:true;
      $_data = (strlen($_string) < $_minChars) ? false:true;
      return $_data;
    }
    

    public function restrictAjax($_controller) {
      if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
      }
      else{
        Session::redirect($_controller);
      }
      // if(!isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        // Session::redirect($_controller);
      // }
    }
    
 
      
    
    
    public function pagination (){
        /*Obtener numero total de  registros*/
        $db = new ClassDB();
        $_pagination = array();
        $_arrayData = array();
        $_arraySection = array();
        $_resultRows = array();
        
        $consulta = $db->prepare($this->getSqlNumRows());
        $consulta->execute();
        
        if($this->getVar('sqlCount')) {
          $_numRows = $consulta->fetchColumn();
          
        }else {
          $_numRows = $consulta->rowCount();
        }
          
        
        @$_totalPag = ceil($_numRows/$this->getLimitRow());
        $this->_pageCurrent = ($this->getPageCurrent() > $_totalPag) ? $_totalPag : $this->getPageCurrent();
        
        /*
        *Inicio proxima pagina
        */
        $_initRow = abs(($this->getPageCurrent() - 1)) * $this->getLimitRow();
        
        $consulta = $db->prepare($this->getSqlRows());
        $consulta->bindParam(':limitFirst', $_initRow, PDO::PARAM_INT);
        $consulta->bindParam(':limitLast', $this->getLimitRow(), PDO::PARAM_INT);
        $consulta->execute();
        $_resultRows = $consulta->fetchALL(PDO::FETCH_ASSOC);
        // $_resultRows = $this->orderMultiDimensionalArray($_resultRows, 'name');

        
        /*
          Paginador
        */

        $_pagination['current'] = $this->getPageCurrent();
        $_pagination['total'] = $_totalPag;
        
        if($this->getPageCurrent() > 1){
          $_pagination['first'] = 1;
          $_pagination['back'] = (($this->getPageCurrent() - 1) == 1 ) ? '' : ($this->getPageCurrent() - 1);
        } else {
          $_pagination['first'] = '';
          $_pagination['back'] = '';
        }
        
        if($this->getPageCurrent() < $_totalPag){
            $_pagination['last'] = $_totalPag;
            $_pagination['next'] = (($this->getPageCurrent() + 1) == $_totalPag) ? '' : ($this->getPageCurrent() + 1);
        } else {
            $_pagination['ultimo'] = '';
            $_pagination['next'] = '';
        }
        
        $_arrayData['data'] = $_resultRows;
        $_arrayData['pagination'] = $_pagination;
        
          /*
          *Datos de paginacion
          *Se obtiene la seccion en la que se mostrara la pagina
          */
          @$_sectionCurrent = ceil($this->getPageCurrent()/$this->getRankPagination());
          
          /*
          *Se obtine la pagina inicial de la seccion
          */
          $_pagInit = ($this->getRankPagination() * ($_sectionCurrent - 1))+1 ;
          $_pagInit = ($_pagInit <= 0 ) ? 1 : $_pagInit;
               
          /*
          *Se obtine la ultima pagina de la seccion
          */
          
          $_pageLast = $_sectionCurrent * $this->getRankPagination();
          $_pageLast = ($this->getPageCurrent() == $_totalPag) ? $_totalPag : $_pageLast;
          $_pageLast = ($_pagInit == 1 && $this->getRankPagination() > $_totalPag) ? $_totalPag : $_pageLast;
          $_pageLast = ($_pageLast >= $_totalPag) ? $_totalPag : $_pageLast;
          
          for($_varAux = $_pagInit; $_varAux < ($_pageLast+1) ; $_varAux++){
            $_arraySection[] = $_varAux;
          }
        
          $_arrayData['rank'] = $_arraySection;
        
          return $_arrayData;
    }
    
    
    public function orderMultiDimensionalArray ($toOrderArray, $field, $inverse = false) {
      $position = array();
      $newRow = array();
      foreach ($toOrderArray as $key => $row) {
          $position[$key]  = $row[$field];
          $newRow[$key] = $row;
      }
      if ($inverse) {
        arsort($position);
      }
      else {
        // asort($position);
        natsort($position);
      }
      $returnArray = array();
      foreach ($position as $key => $pos) {     
        $returnArray[] = $newRow[$key];
      }
      return $returnArray;
    }
   
}