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
 
class weekController extends Controller
{
    public $_arrayData = array();
    private $_weekModel;
    
    /*********************
    ****Paginador ajax
    *********************/
    
    public function paginator() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      
      echo "ok[#]";
      $this->_error->setErrorValue('successful');
      $this->_view->assign('arrayError',$this->_error->getErrorArray());
      $this->_view->renderizar('error_success',false,true,'contentbox');
      echo "[#]";
      $_arrayData = $this->_weekModel->getWeek($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows', false, $_ajax = true, 'week');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator', false, $_ajax = true,'contentbox');
    }
    
    public function index() {
    
      Session::accessRestrict('week',true,'login');

      $_SESSION['pageCurrent'] = '';
      
      $this->_weekModel = $this->loadModel('week');
      $_arrayData = $this->_weekModel->getWeek(null,null,null);
      
      $_urlPaginator = $this->_view->getUrlViewElement('contentbox','paginator');
      $_urlBoxContent = $this->_view->getUrlViewElement('week','_rows');
      
      $this->_view->assign('_urlBoxContent',$_urlBoxContent);
      $this->_view->assign('_urlPaginator',$_urlPaginator);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar('index');
    }
    
    public function ajax_paginator() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');

      $_pageCurrent = abs($_POST['page']);
      $_SESSION['pageCurrent'] = $_pageCurrent;  
      $_arrayData = $this->_weekModel->getweek($_pageCurrent, $_rankPagination = null, $_limitRow = null);
      echo "ok[#]";
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($_viewTPL = '_rows',false, $_ajax = true,'week');
      echo "[#]";
      $this->_view->renderizar($_viewTPL = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    /************************
    **Modal agregar semana
    ************************/
    public function ajax_mod_add() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      $this->_view->assign('_textTitle', 'Agregar Semana');
      $this->_view->renderizar($_viewTPL = 'form_week',false, $_ajax = true,'elements');
    }  

    /********************
    ***Agregar semana
    ********************/
    public function ajax_add(){
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      
      $this->_util->setVar('week_name' , $_POST['week_name']);
      
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('week_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_weekModel->setWeekName($this->_util->getVar('week_name'));
        $this->_weekModel->insertWeek();
        $this->paginator();
      }
    }
    
    /**************************
    *****Modal editar semana
    **************************/
    public function ajax_mod_update() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      if($this->_util->validateInteger($_POST['idWeek'])) {
        $this->_weekModel->setIdweek($_POST['idWeek']);
      }
      
      $_arrayData = $this->_weekModel->infoWeek();
      
      $this->_view->assign('_operation', 'update');
      $this->_view->assign('_arrayData', $_arrayData);
      $this->_view->assign('_textTitle', 'Editar semana');
      $this->_view->renderizar($_viewTPL = 'form_week', false, $_ajax = true,'elements');
    }
    
    /**************************
    ***********Editar semana
    **************************/
    public function ajax_update() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      $this->_util->setVar('week_name' , $_POST['week_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('week_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_weekModel->setIdWeek($_POST['idWeek']);
        $this->_weekModel->setWeekName($this->_util->getVar('week_name'));
        $this->_weekModel->updateWeek();
        $this->paginator();
      }
    }

    /*********************
    ****Eliminar semana
    *********************/
    public function ajax_delete() {
      $this->_util->restrictAjax('week');
      $this->_weekModel = $this->loadModel('week');
      if($this->_util->validateInteger($_POST['idWeek'])) {
        $this->_weekModel->setIdWeek($_POST['idWeek']);
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
        $this->_weekModel->deleteWeek();
        $this->paginator();
      }
    }
    
}//FIN CLASE