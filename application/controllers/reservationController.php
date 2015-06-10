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
 
class reservationController extends Controller
{
    public $_arrayData = array();
    private $_reservationModel;
    
    /*********************
    ****Paginador ajax
    *********************/
    
    public function paginator() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      
      echo "ok[#]";
      $this->_error->setErrorValue('successful');
      $this->_view->assign('arrayError',$this->_error->getErrorArray());
      $this->_view->renderizar('error_success',false,true,'contentbox');
      echo "[#]";
      $_arrayData = $this->_reservationModel->getReservation($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows', false, $_ajax = true, 'reservation');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator', false, $_ajax = true,'contentbox');
    }
    
    public function index() {
    
      Session::accessRestrict('reservation',true,'login');

      $_SESSION['pageCurrent'] = '';
      
      $this->_reservationModel = $this->loadModel('reservation');
      $_arrayData = $this->_reservationModel->getReservation(null,null,null);
      
      $_urlPaginator = $this->_view->getUrlViewElement('contentbox','paginator');
      $_urlBoxContent = $this->_view->getUrlViewElement('reservation','_rows');
      
      $this->_view->assign('_urlBoxContent',$_urlBoxContent);
      $this->_view->assign('_urlPaginator',$_urlPaginator);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar('index');
    }
    
    public function ajax_paginator() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');

      $_pageCurrent = abs($_POST['page']);
      $_SESSION['pageCurrent'] = $_pageCurrent;  
      $_arrayData = $this->_reservationModel->getReservation($_pageCurrent, $_rankPagination = null, $_limitRow = null);
      echo "ok[#]";
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'reservation');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    /************************
    **Modal agregar tipo de reservacion
    ************************/
    public function ajax_mod_add() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      $this->_view->assign('_textTitle', 'Agregar tipo de reservación');
      $this->_view->renderizar($_viewTPL = 'form_reservation',false, $_ajax = true,'elements');
    }  

    /********************
    ***Agregar tipo de reservacion
    ********************/
    public function ajax_add(){
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      
      $this->_util->setVar('reservation_name' , $_POST['reservation_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('reservation_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_reservationModel->setReservationName($this->_util->getVar('reservation_name'));
        $this->_reservationModel->insertReservation();
        $this->paginator();
      }
    }
    
    /**************************
    *****Modal editar tipo de reservacion
    **************************/
    public function ajax_mod_update() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      if($this->_util->validateInteger($_POST['idReservation'])) {
        $this->_reservationModel->setIdReservation($_POST['idReservation']);
      }
      
      $_arrayData = $this->_reservationModel->infoReservation();
      
      $this->_view->assign('_operation', 'update');
      $this->_view->assign('_arrayData', $_arrayData);
      $this->_view->assign('_textTitle', 'Editar tipo de reservación');
      $this->_view->renderizar($_viewTPL = 'form_reservation', false, $_ajax = true,'elements');
    }
    
    /**************************
    ***********Editar tipo de reservacion
    **************************/
    public function ajax_update() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      $this->_util->setVar('reservation_name' , $_POST['reservation_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('reservation_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_reservationModel->setIdReservation($_POST['idReservation']);
        $this->_reservationModel->setReservationName($this->_util->getVar('reservation_name'));
        $this->_reservationModel->updateReservation();
        $this->paginator();
      }
    }

    /*********************
    ****Eliminar tipo de reservacion
    *********************/
    public function ajax_delete() {
      $this->_util->restrictAjax('reservation');
      $this->_reservationModel = $this->loadModel('reservation');
      if($this->_util->validateInteger($_POST['idReservation'])) {
        $this->_reservationModel->setIdReservation($_POST['idReservation']);
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
        $this->_reservationModel->deleteWeek();
        $this->paginator();
      }
    }
    
}//FIN CLASE