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
 
class seasonController extends Controller
{
    public $arrayData = array();
    private $_seasonModel;
    
    public function paginator(){
      $this->_util->restrictAjax('season');
      $this->_destinationModel = $this->loadModel('destination');

      echo "ok[#]";
      $this->_error->setErrorValue('successful');
      $this->_view->assign('arrayError',$this->_error->getErrorArray());
      $this->_view->renderizar('error_success',false,true,'contentbox');
      echo "[#]";
      $_arrayData = $this->_seasonModel->getSeason($_SESSION['pageCurrent'], $_rankPagination = null, $_limitRow = null);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($vista = '_rows',false, $_ajax = true,'season');
      echo "[#]";
      $this->_view->renderizar($vista = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    public function index() {
      
      Session::accessRestrict('season', $_redirect = true, $_controller = 'login');

      $_SESSION['pageCurrent'] = '';
      
      $this->_seasonModel = $this->loadModel('season');
      $_arrayData = $this->_seasonModel->getSeason(null,null,null);
      
      $_urlPaginator = $this->_view->getUrlViewElement('contentbox','paginator');
      $_urlBoxContent = $this->_view->getUrlViewElement('season','_rows');
      
      $this->_view->assign('_urlBoxContent',$_urlBoxContent);
      $this->_view->assign('_urlPaginator',$_urlPaginator);
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar('index','login');
    }
    
    
    /********************
    ************Paginador
    ********************/
    public function ajax_paginator() {
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');

      $_pageCurrent = abs($_POST['page']);
      $_SESSION['pageCurrent'] = $_pageCurrent;  
      $_arrayData = $this->_seasonModel->getSeason($_pageCurrent, $_rankPagination = null, $_limitRow = null);
      echo "ok[#]";
      $this->_view->assign('_arrayData',$_arrayData);
      $this->_view->renderizar($vista = '_rows',false, $_ajax = true,'season');
      echo "[#]";
      $this->_view->renderizar($vista = 'paginator',false, $_ajax = true,'contentbox');
    }
    
    /************************
    **Modal agregar temporada
    ************************/
    public function ajax_mod_add() {
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');
      
      $this->_view->assign('_textTitle', 'Agregar Temporada');
      $this->_view->renderizar($vista = 'form_season',false, $_ajax = true,'elements');
    }  

    /********************
    ***Agregar temporada
    ********************/
    public function ajax_add(){
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');
      
      $this->_util->setVar('season_name' , $_POST['season_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('season_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_seasonModel->setSeasonName($this->_util->getVar('season_name'));
        $this->_seasonModel->insertSeason();
        $this->paginator();
      }
    }
    
    /**************************
    *****Modal editar temporada
    **************************/
    public function ajax_mod_update() {
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');
      
      if($this->_util->validateInteger($_POST['idSeason'])) {
        $this->_seasonModel->setIdSeason($_POST['idSeason']);
      }
      
      $_arrayData = $this->_seasonModel->infoSeason();
      
      $this->_view->assign('_operation', 'update');
      $this->_view->assign('_arrayData', $_arrayData);
      $this->_view->assign('_textTitle', 'Editar Temporada');
      $this->_view->renderizar($vista = 'form_season',false, $_ajax = true,'elements');
    }
    
    /**************************
    ***********Editar temporada
    **************************/
    public function ajax_update() {
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');
      
      $this->_util->setVar('season_name' , $_POST['season_name']);
      $_valido = true;
      if(!$this->_util->validateString($this->_util->getVar('season_name'))) {
        $_valido = false;
        $this->_error->setErrorValue('incorrectText');
      }

      if(!$_valido) {
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_seasonModel->setIdSeason($_POST['idSeason']);
        $this->_seasonModel->setSeasonName($this->_util->getVar('season_name'));
        $this->_seasonModel->updateSeason();
        $this->paginator();
      }
    }
    
    /********************
    ***Eliminar temporada
    ********************/
    public function ajax_delete() {
      $this->_util->restrictAjax('season');
      $this->_seasonModel = $this->loadModel('season');
      
      if($this->_util->validateInteger($_POST['idSeason'])) {
        $this->_seasonModel->setIdSeason($_POST['idSeason']);
      }
      else {
        $this->_error->setErrorValue('Seleccionar un elemento',false);
      }
      
      if(sizeof($this->_error->getErrorArray())>0) {
        
        $this->_view->assign('arrayError',$this->_error->getErrorArray());
        echo "fail[#]";
        $this->_view->renderizar('error',false,true,'contentbox'); 
      }
      else {
        $this->_seasonModel->deleteSeason();
        $this->paginator();
      }
    }
    
}//FIN CLASE