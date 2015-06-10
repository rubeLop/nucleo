<?php
/*
 * Initiator -- Clase principal 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
namespace Core;
use Core\Main;

class Initiator 
{     
    /*
    *run: Funcion para obtener variables de controladores
    */
    public static function run(Request $peticion){
        $_controller_file = $peticion->request->getVar('controller')."Controller";
        $_routeController = ROOT . 'controllers' . DS . $_controller_file . '.php';
                
        if(is_readable($_routeController)){
          require_once $_routeController;
          $controller = new $_controller_file();
            
            $method = is_callable(array($controller, $peticion->request->getVar('method')))?$peticion->request->getVar('method'):DEFAULT_METHOD;
            $_args = $peticion->request->getVar('args');
            
          if(!empty($_args)){
              call_user_func_array(array($controller, $method), $_args);
          }
          else{
              call_user_func(array($controller, $method));
          }            
        } 
        else {
          // throw new Exception('no encontrado');
          echo 'no encontrado';
        }
        
    }  
}