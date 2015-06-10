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
 
class habitationController extends Controller
{
    public $arrayData = array();
    private $_habitationModel;
    
    /*********************
    ****Paginador ajax
    *********************/
    
    public function paginator() {
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');
      
      echo "ok[#]";
      $this->_error->setErrorValue('successful');
      $this->_view->assign('arrayError',$this->_error->getErrorArray());
      $this->_view->renderizar('error_success',false,true,'contentbox');
      echo "[#]";
      $_arrayData = $this->_habitationModel->getHabitation($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'habitation');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    public function index() {    
      Session::accessRestrict('habitation', $_redirect = true, $_controller = 'login');
      $_SESSION['pageCurrent'] = '';
      
      $this->_habitationModel = $this->loadModel('habitation');
      $_arrayData = $this->_habitationModel->getHabitation(null,null,null);
      
      $_urlPaginator = $this->_view->getUrlViewElement('contentbox','paginator');
      $_urlBoxContent = $this->_view->getUrlViewElement('habitation','_rows');
      
      $this->_view->assign('_urlBoxContent',$_urlBoxContent);
      $this->_view->assign('_urlPaginator',$_urlPaginator);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar('index');
    }
    
    public function ajax_paginator() {
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');

      $_pageCurrent = abs($_POST['page']);
      $_SESSION['pageCurrent'] = $_pageCurrent;  
      $_arrayData = $this->_habitationModel->getHabitation($_pageCurrent, $_rankPagination = null, $_limitRow = null);
      echo "ok[#]";
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'habitation');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    /************************
    **Modal agregar lobby
    ************************/
    public function ajax_mod_add() {
      $this->_util->restrictAjax('habitation');
      
      $this->_habitationModel = $this->loadModel('habitation');
      $this->_destinationModel = $this->loadModel('destination');
      
      $this->_destinationModel->setStatus('Active');
      $_enumDestination = $this->_destinationModel->enumDestination();
      
      $this->_view->assign('_enumDestination', $_enumDestination);
      $this->_view->assign('_textTitle', 'Agregar Habitación');
      $this->_view->renderizar($_viewTPL = 'form_habitation',false, $_ajax = true,'elements');
    }  

    /********************
    ***Agregar lobby
    ********************/
    public function ajax_add(){
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');
      $this->_destinationModel = $this->loadModel('destination');
      
      $this->_util->setVar('lobby_name' , $_POST['lobby_name']);
      $this->_util->setVar('idDestination' , $_POST['idDestination']);
      $_valido = true;
      
      if(!$this->_util->validateString($this->_util->getVar('lobby_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }
      
      if(!$this->_util->validateInteger($this->_util->getVar('idDestination'))) {
        $_valido = false;
        $this->_error->setErrorValue('required',true ,LANG_ERROR, ": Destino");
      }
      
      $this->_destinationModel->setIdDestination($this->_util->getVar('idDestination'));
      $_infoDestination = $this->_destinationModel->infoDestination();
      if($_infoDestination['status'] == 'Inactive') {
        $_valido = false;
        $this->_error->setErrorValue('notAvailable',true ,LANG_ERROR, ": Destino");
      }
      
      

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_habitationModel->setIdDestination($this->_util->getVar('idDestination'));
        $this->_habitationModel->setlobbyName($this->_util->getVar('lobby_name'));
        $this->_habitationModel->insertLobby();
        $this->paginator();
      }
    }
    
    /**************************
    *****Modal editar lobby
    **************************/
    public function ajax_mod_update() {
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');
      $this->_destinationModel = $this->loadModel('destination');
      
      if($this->_util->validateInteger($_POST['idLobby'])) {
        $this->_habitationModel->setIdLobby($_POST['idLobby']);
      }
      
      $this->_destinationModel->setStatus('Active');
      $_enumDestination = $this->_destinationModel->enumDestination();
      
      $_arrayData = $this->_habitationModel->infoLobby();
      
      $this->_view->assign('_enumDestination', $_enumDestination);
      $this->_view->assign('_operation', 'update');
      $this->_view->assign('_arrayData', $_arrayData);
      $this->_view->assign('_textTitle', 'Editar Lobby');
      $this->_view->renderizar($_viewTPL = 'form_lobby',false, $_ajax = true,'elements');
    }
    
    /**************************
    ***********Editar lobby
    **************************/
    public function ajax_update() {
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');
      $this->_destinationModel = $this->loadModel('destination');
      $this->_util->setVar('lobby_name' , $_POST['lobby_name']);
      $this->_util->setVar('idDestination' , $_POST['idDestination']);
      
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('lobby_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }
      
      if(!$this->_util->validateInteger($this->_util->getVar('idDestination'))) {
        $_valido = false;
        $this->_error->setErrorValue('required',true ,LANG_ERROR, ": Destino");
      }

      $this->_destinationModel->setIdDestination($this->_util->getVar('idDestination'));
      $_infoDestination = $this->_destinationModel->infoDestination();
      if($_infoDestination['status'] == 'Inactive') {
        $_valido = false;
        $this->_error->setErrorValue('notAvailable',true ,LANG_ERROR, ": Destino");
      }
      
      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_habitationModel->setIdLobby($_POST['idLobby']);
        $this->_habitationModel->setIdDestination($this->_util->getVar('idDestination'));
        $this->_habitationModel->setLobbyName($this->_util->getVar('lobby_name'));
        $this->_habitationModel->updateLobby();
        $this->paginator();
      }
    }

    /*********************
    ****Eliminar lobby
    *********************/
    public function paginator1() {
      $this->_util->restrictAjax('habitation');
      header('Content-type: application/json; charset=utf-8');
      echo json_encode($jsondata);
    }
    
    public function ajax_delete() {
      $this->_util->restrictAjax('habitation');
      $this->_habitationModel = $this->loadModel('habitation');
      if($this->_util->validateInteger($_POST['idLobby'])) {
        $this->_habitationModel->setIdLobby($_POST['idLobby']);
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
        $this->_habitationModel->deleteLobby();
        $this->paginator();
      }
    }
    
}//FIN CLASE