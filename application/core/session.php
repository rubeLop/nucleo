<?php
  /*
   * Session -- Clase para el manejo de sesion
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
 
   */
namespace Core;

class Session
{
    public static function init() {
        session_start();
    }
    
    // public function isLogged() {
      // return false;    
    // }
    
    
    
    /* public static function destroy($clave = false)
    {
        if($clave){
            if(is_array($clave)){
                for($i = 0; $i < count($clave); $i++){
                    if(isset($_SESSION[$clave[$i]])){
                        unset($_SESSION[$clave[$i]]);
                    }
                }
            }
            else{
                if(isset($_SESSION[$clave])){
                    unset($_SESSION[$clave]);
                }
            }
        }
        else{
            session_destroy();
        }
    }
    
    public static function set($clave, $valor)
    {
        if(!empty($clave))
        $_SESSION[$clave] = $valor;
    }
    
    public static function get($clave)
    {
        if(isset($_SESSION[$clave]))
            return $_SESSION[$clave];
    }
    
    public static function acceso($level)
    {
        if(!Session::get('autenticado')){
            header('location:' . BASE_URL . 'error/access/5050');
            exit;
        }
        
        Session::tiempo();
        
        if(Session::getLevel($level) > Session::getLevel(Session::get('level'))){
            header('location:' . BASE_URL . 'error/access/5050');
            exit;
        }
    }
    
    public static function accesoView($level)
    {
        if(!Session::get('autenticado')){
            return false;
        }
        
        if(Session::getLevel($level) > Session::getLevel(Session::get('level'))){
            return false;
        }
        
        return true;
    }
    
    public static function getLevel($level)
    {
        $role['admin'] = 3;
        $role['especial'] = 2;
        $role['usuario'] = 1;
        
        if(!array_key_exists($level, $role)){
            throw new Exception('Error de acceso');
        }
        else{
            return $role[$level];
        }
    }
    
    public static function accesoEstricto(array $level, $noAdmin = false)
    {
        if(!Session::get('autenticado')){
            header('location:' . BASE_URL . 'error/access/5050');
            exit;
        }
        
        Session::tiempo();
        
        if($noAdmin == false){
            if(Session::get('level') == 'admin'){
                return;
            }
        }
        
        if(count($level)){
            if(in_array(Session::get('level'), $level)){
                return;
            }
        }
        
        header('location:' . BASE_URL . 'error/access/5050');
    }
    
    public static function accesoViewEstricto(array $level, $noAdmin = false)
    {
        if(!Session::get('autenticado')){
            return false;
        }
        
        if($noAdmin == false){
            if(Session::get('level') == 'admin'){
                return true;
            }
        }
        
        if(count($level)){
            if(in_array(Session::get('level'), $level)){
                return true;
            }
        }
        
        return false;
    }
    
    public static function tiempo()
    {
        if(!Session::get('tiempo') || !defined('SESSION_TIME')){
            throw new Exception('No se ha definido el tiempo de sesion'); 
        }
        
        if(SESSION_TIME == 0){
            return;
        }
        
        if(time() - Session::get('tiempo') > (SESSION_TIME * 60)){
            Session::destroy();
            header('location:' . BASE_URL . 'error/access/8080');
        }
        else{
            Session::set('tiempo', time());
        }
    } */
    
    public static function accessRules()
    {
        $arreglo =  array(
            'Admin'=> array(
              'Operations' => array ('Create'=>1,'Read'=>1,'Update'=>1,'Delete'=>1),
              'AccesPag' => array('all'=>1, 'season'=>1,'destination' => 1, 'lobby'=>1, 
                                  'week'=>1, 'reservation'=>1, 'habitation' => 1
                                  ),
              'Current' => array('userCurrent' => $_SESSION['logged']["name"]),
              'Logged' => array('isLogged' => $_SESSION['logged']['isLogged']),
            ),
            
            'Default'=> array(
                'Operations' => array ('Read'=>1),
                'AccesPag' => array ('index'=>1,'login'=>1),
                'Current' => array('userCurrent' => $_SESSION['logged']["name"]),
                'Logged' => array('isLogged' => $_SESSION['logged']['isLogged']),
            ),
            
            'Invited'=> array(
                'Operations' => array ('Read'=>1),
                'AccesPag' => array ('index'=>1,'login' => 1, 'season'=>0, 'lobby' => 0, 
                                      'week'=>0, 'reservation'=>0, 'habitation' => 1
                                    ),
                'Current' => array('userCurrent' => $_SESSION['logged']["name"]),
                'Logged' => array('isLogged' => $_SESSION['logged']['isLogged']),
            ),
        );
        
        if (Session::access()) {
          return $arreglo[$_SESSION['logged']["type"]];
        }
        else{
          return $arreglo['Invited'];
        }
        
        // if(in_array( 'Read',$arreglo['Admin']['AccesPag']))
          // echo 'Hola';
          // echo implode(',',$arreglo['Admin']['Acces']);
    }
    
    public static function accessRestrict($_modulo, $_redirect = true,$_controller = null) {
      $_arrayRules = array();
      $_arrayRules = Session::accessRules();
        if($_arrayRules['AccesPag'][$_modulo] == 0) {
          if($_redirect) {
            Session::redirect($_controller);
          }
          else {
            return false;
          }
        }
        else {
          return false;
        }
       return true;
    }
    
    public static function access(){
      //sino existe retornamos falso
      if(empty($_SESSION['logged']) || !isset($_SESSION['logged'])) {
        if($_SESSION['logged']['isLogged'] != 1) {
          return false;
        }
        return false;
      }
      else {
        if($_SESSION['logged']['isLogged'] == 1) {
          return true;
        }
        else {
          return false;
        }
      }
    }
    
    
    public static function redirect($_urlDefault = null) {
      header('location:'.WEB_ROOT.$_urlDefault);
      exit;
    }
    
    public function creatSession($_values = array()){
      $_SESSION['logged']["loginKey"] = $_values['idUser'];	
      $_SESSION['logged']["type"] = $_values['type'];	
      $_SESSION['logged']["name"] = $_values['name'];
      $_SESSION['logged']["active"] = $_values['active'];
      $_SESSION['logged']['isLogged'] = 1;
    }	
    
    public static function closeSession() {
      session_destroy();
    }
}

?>