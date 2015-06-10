<?php
/*
 * Control1er -- Controlador 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 
 */

namespace Core;
use Core\View;
use Core\Error;
use Core\Util;
// use Core\Language;

abstract class Controller
{
    /**
     * view   variable para utilizar la clase
     * error  variable para utilizar la clase
     * util   variable para utilizar la clase
     */
    public $_view;
    public $_error;
    public $_util;
    // public $_language;
    /*************************
     * Constructor de la clase
     ************************/
    public function __construct() {
        $this->_view = new View(new Request);
        $this->_error = new Error();
        $this->_util = new Util();
        // $this->language = new Language();
    }

    /******************************************
    *loadModel: Funcion para cargar los modelos
    ******************************************/
    protected function loadModel($_modelo) {
      $_modelo = $_modelo . 'Model';
      $_rutaModelo = ROOT . 'models' . DS . $_modelo . '.php';
      
      if(is_readable($_rutaModelo)){
          require_once $_rutaModelo;
          $_modelo = new $_modelo;
          return $_modelo;
      }
      else {
            echo "no encontrado";
          // throw new Exception('Error de modelo');
      }
    }
}

