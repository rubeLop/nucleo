<?php
// namespace Controllers;

use Core\View;
use Core\Controller;
use Core\Session;

/*
  22/05/2015
  Carga de vista
  Ruben Lopez
  rubechido@gmail.com
 */
class indexController extends Controller
{
    public $arrayDatos = array();
    
    public function index() {
      
      // Session::closeSession();
      // header('WWW-Authenticate: Basic realm="Test Authentication System"');
    // header('HTTP/1.0 401 Unauthorized');
    // echo "Debes ingresar un login ID y password validos para accesar a este recurso\n";
    // exit;
      // $this->model = new Controller();
      // $datos = $this->loadModel('index');
      // $arrayDatos = $datos->getDatos();
      $this->_view->renderizar('index','login');
      // echo "<pre>"; print_r($arrayDatos);
      // header('Location: '.WEB_ROOT.'login');
    }
    
    // /**
     // * Call the parent construct
     // */
    // public function __construct()
    // {
        // parent::__construct();
        // $this->language->load('Welcome');
    // }

    // /**
     // * Define Index page title and load template files
     // */
    // public function index()
    // {
        // $data['title'] = $this->language->get('welcome_text');
        // $data['welcome_message'] = $this->language->get('welcome_message');

        // View::renderTemplate('header', $data);
        // View::render('welcome/welcome', $data);
        // View::renderTemplate('footer', $data);
    // }

    // /**
     // * Define Subpage page title and load template files
     // */
    // public function subPage()
    // {
        // $data['title'] = $this->language->get('subpage_text');
        // $data['welcome_message'] = $this->language->get('subpage_message');

        // View::renderTemplate('header', $data);
        // View::render('Welcome/SubPage', $data);
        // View::renderTemplate('footer', $data);
    // }
}
