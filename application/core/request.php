<?php
  /*
   * Model -- Clase principal modelo 
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
   */

namespace Core;
use Core\Util;

class Request
{
  public function __construct() {
    $this->request = new Util();
    $_uri = parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH);
    $_uri = trim($_uri, ' /');
    $_uri = ($amp = strpos($_uri, '&')) !== false ? substr($_uri, 0, $amp) : $_uri;

    $_parts = explode('/', $_uri);

    $_controller = array_shift($_parts);
    $_controller = $_controller ? $_controller : DEFAULT_CONTROLLER;

    $_method = array_shift($_parts);
    $_method = $_method ? $_method : DEFAULT_METHOD;

    $_args = !empty($_parts) ? $_parts : array();
    
    $this->request->setVar('controller',$_controller);
    $this->request->setVar('method',$_method);
    $this->request->setVar('args',$_args);
  }
}