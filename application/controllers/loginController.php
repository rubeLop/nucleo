<?php
use Core\View;
use Core\Controller;
use Core\Session;

/*
  *22/05/2015
  *Carga de vista
  *Ruben Lopez
  *rubechido@gmail.com
 */
 
class loginController extends Controller
{
    private $_loginModel;
    // public $arrayDatos = array();
    
    public function index() {
     if(Session::access()){
        Session::redirect();
      }
      $this->_view->renderizar('index');
    }
    
    /****************
    **Login principal
    ****************/
    public function ajax_login() {
      //pendiente bloquear desde
      //pendiente manejo de sesion si expira

      $this->_loginModel = $this->loadModel('login');
      $session = new Session();
      $_values = explode("&", $_POST['values']);
      unset($_POST['values']);
      foreach($_values as $_key => $_val)
      {
        $_arrayDatos = explode("=", $_values[$_key]);
        $_data[$_arrayDatos[0]] = urldecode($_arrayDatos[1]);
      }
         
      $_valores = $this->_loginModel->getDatos($_data['email'],$_data['password']);
      if(!$_valores){
        $this->_error->setErrorValue(null,1);
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox');  
      }
      else {
        echo "ok[#]";
        $session->creatSession($_valores);
      }
    }
        
    /**********************
    **Cerrar sesion
    ***********************/
    public function ajax_logout() {
      echo "ok[#]";
      $session = new Session();
      $session->closeSession();
    }
    
}//FIN CLASE
