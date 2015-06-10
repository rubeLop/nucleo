<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED & ~E_NOTICE);
  
  define('DS', DIRECTORY_SEPARATOR);
  define('REAL_PATH', realpath(dirname(__FILE__)) );
  define('ROOT',  REAL_PATH . DS . 'application' . DS);
  define('APP_PATH', REAL_PATH . DS . 'application' .DS. 'core' . DS);

  // echo ROOT; echo "<br>";
  // echo $_SERVER["DOCUMENT_ROOT"]. "<br>";
  // echo $_SERVER["HTTP_HOST"]. "<br>";
  // echo REAL_PATH;
  
    // switch($_SERVER["HTTP_HOST"]) {
      // case "localhost":
      // case "localhost:8080":
      // case "127.0.0.1":
      
      // break;
      // default:
      // break;      
    // }
  
  // try{
      // require_once ROOT . 'libs' . DS . 'smarty' . DS . 'Smarty.class.php';
      require_once APP_PATH . 'config.php';
      require_once APP_PATH . 'request.php';
      require_once APP_PATH . 'initiator.php';
      require_once APP_PATH . 'controller.php';
      require_once APP_PATH . 'database.php';
      require_once APP_PATH . 'model.php';
      require_once APP_PATH . 'view.php';

      require_once APP_PATH . 'session.php';
      
      require_once APP_PATH . 'util.php';
      require_once APP_PATH . 'language.php';
      require_once APP_PATH . 'error.php';
      
      require_once APP_PATH . 'hash.php';
      
      use Core\Initiator;
      use Core\Request;
      use Core\Session;
      
      Session::init();
      // ECHO "<PRE>";print_r($_SESSION);
       // if(Session::access()){
          // Session::redirect("login");
          // exit;
        // }
      // $session = new Core\Session;
      // echo "<pre>"; print_r($session->accessRules()); echo "<pre>";
      // exit;
      Initiator::run(new Request);
      
  // }
  // catch(Exception $e){
      // echo $e->getMessage();
  // }