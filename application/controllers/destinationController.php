<?php
use Core\View;
use Core\Controller;
use Core\Session;

/*
 * Control1er -- Controlador 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 
 */
 
class destinationController extends Controller
{
    public $arrayData = array();
    private $_destinationModel;
    
    /*********************
    ****Paginador ajax
    *********************/
    
    public function paginator() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      
      echo "ok[#]";
      $this->_error->setErrorValue('successful');
      $this->_view->assign('arrayError',$this->_error->getErrorArray());
      $this->_view->renderizar('error_success',false,true,'contentbox');
      echo "[#]";
      $_arrayData = $this->_destinationModel->getDestination($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'destination');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    public function index() {    
      // echo $_SERVER['HTTP_REFERER']    ;
      Session::accessRestrict('destination',true,'login');
      
    // $nuevo = array();
    // $nuevo['demo']['tres']['des']="assa";
    // echo $nuevo['demo']['tres']['des'];
    // echo "<pre>";

    // print_r($nuevo);
     // exit; 
      $_SESSION['pageCurrent'] = '';
      
      $this->_destinationModel = $this->loadModel('destination');
      $_arrayData = $this->_destinationModel->getDestination(null,null,null);
      
      $_urlPaginator = $this->_view->getUrlViewElement('contentbox','paginator');
      $_urlBoxContent = $this->_view->getUrlViewElement('destination','_rows');
      
      $this->_view->assign('_urlBoxContent',$_urlBoxContent);
      $this->_view->assign('_urlPaginator',$_urlPaginator);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar('index');
    }
    
    public function ajax_paginator() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');

      $_pageCurrent = abs($_POST['page']);
      $_SESSION['pageCurrent'] = $_pageCurrent;  
      $_arrayData = $this->_destinationModel->getDestination($_pageCurrent, $_rankPagination = null, $_limitRow = null);
      echo "ok[#]";
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'destination');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    /************************
    **Modal agregar destino
    ************************/
    public function ajax_mod_add() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      $this->_view->assign('_textTitle', 'Agregar Destino');
      $this->_view->renderizar($_viewTPL = 'form_destination',false, $_ajax = true,'elements');
    }  

    /********************
    ***Agregar destino
    ********************/
    public function ajax_add(){
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      $this->_util->setVar('destination_name' , $_POST['destination_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('destination_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_destinationModel->setDestinationName($this->_util->getVar('destination_name'));
        $this->_destinationModel->insertDestination();
        $this->paginator();
      }
    }
    
    /**************************
    *****Modal editar destino
    **************************/
    public function ajax_mod_update() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      if($this->_util->validateInteger($_POST['idDestination'])) {
        $this->_destinationModel->setIdDestination($_POST['idDestination']);
      }
      
      $_arrayData = $this->_destinationModel->infoDestination();
      
      $this->_view->assign('_operation', 'update');
      $this->_view->assign('_arrayData', $_arrayData);
      $this->_view->assign('_textTitle', 'Editar Destino');
      $this->_view->renderizar($_viewTPL = 'form_destination',false, $_ajax = true,'elements');
    }
    
    /**************************
    ***********Editar destino
    **************************/
    public function ajax_update() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      $this->_util->setVar('destination_name' , $_POST['destination_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('destination_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_destinationModel->setIdDestination($_POST['idDestination']);
        $this->_destinationModel->setDestinationName($this->_util->getVar('destination_name'));
        $this->_destinationModel->updateDestination();
        $this->paginator();
      }
    }

    /*********************
    ****Eliminar destino
    *********************/
      public function paginator1() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      
      $this->_error->setErrorValue('successfulOperation');
      $_jsonData['succes'] = true;
      $_jsonData['message'] = $this->_error->getErrorArray();
      $_jsonData['data'] = 
      
      header('Content-type: application/json; charset=utf-8');
      echo json_encode($jsondata);
      
      // echo "ok[#]";
      // $this->_error->setErrorValue('successfulOperation');
      // $this->_view->assign('arrayError',$this->_error->getErrorArray());
      // $this->_view->renderizar('error_success',false,true,'contentbox');
      // echo "[#]";
      // $_arrayData = $this->_destinationModel->getDestination($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      // $this->_view->assign('_arrayData',$_arrayData);
      // $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'destination');
      // echo "[#]";
      // $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    public function ajax_delete() {
      $this->_util->restrictAjax('destination');
      $this->_destinationModel = $this->loadModel('destination');
      if($this->_util->validateInteger($_POST['idDestination'])) {
        $this->_destinationModel->setIdDestination($_POST['idDestination']);
      }
      else {
        $this->_error->setErrorValue('Error',false);
      }
      
      if(sizeof($this->_error->getErrorArray())>0) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_destinationModel->deleteDestination();
        $this->paginator();
      }
    }
    
}//FIN CLASE