<?php
namespace Core;
use \Smarty;
use Core\Session;
require_once ROOT . 'libs' . DS . 'smarty' . DS . 'Smarty.class.php';

// use Smarty;

  /*
   * View -- Clase principal vista
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
   */


class View extends Smarty
{
    private $_controlador;
    private $_js;
    
    public function __construct(Request $peticion) {
        parent::__construct();
        $this->_controlador = $peticion->request->getVar('controller');
        $this->_js = array();
    }
    
    public function renderizar($_vista, $_item = false, $_methodAjax = false, $_contentBox = 'contentbox',$_paginator = false)
    {
        // require_once ROOT . 'libs' . DS . 'smarty' . DS . 'Smarty.class.php';
        //meodo para importar la clase
        // $smarty = new \Smarty();
        
        //configuracion principal del template
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;
        
       
        
        $_menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => WEB_ROOT
                ),
            
            array(
                'id' => 'post',
                'titulo' => 'Post',
                'enlace' => WEB_ROOT . 'post'
                )
        );
        
        // if(Session::get('autenticado')){
            // $menu[] = array(
                // 'id' => 'login',
                // 'titulo' => 'Cerrar Sesion',
                // 'enlace' => WEB_ROOT . 'login/cerrar'
                // );
        // }else{
            // $menu[] = array(
                // 'id' => 'login',
                // 'titulo' => 'Iniciar Sesion',
                // 'enlace' => WEB_ROOT . 'login'
                // );
            
            // $menu[] = array(
                // 'id' => 'registro',
                // 'titulo' => 'Registro',
                // 'enlace' => WEB_ROOT . 'registro'
                // );
        // }
        
        $_js = array();
        
        if(count($this->_js)){
            $_js = $this->_js;
        }
        
        $_params = array(
            // 'ruta_bootstrap' => WEB_ROOT . 'views/layout/' . DEFAULT_LAYOUT . '/bootstrap/',
            // 'ruta_css' => WEB_ROOT . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            // 'ruta_img' => WEB_ROOT . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            // 'ruta_js' => WEB_ROOT . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            //directorio publico
            'route_modal' => ROOT . 'views/contentbox/modal_default.tpl',
            'route_bootstrap' => WEB_ROOT . 'public/bootstrap/',
            'route_css' => WEB_ROOT . 'public/css/',
            'route_img' => WEB_ROOT . 'public/img/',
            'route_js' => WEB_ROOT . 'public/js/',
            'menu' => $_menu,
            'item' => $_item,
            'js' => $_js,
            'root' => WEB_ROOT,
            'pageCurrent' => $this->_controlador,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY,
                'app_title' => APP_TITLE
            )
        );
        
        $_privileges = Session::accessRules();
        $this->assign('_privileges', $_privileges);
        
        $this->assign('_jsController',$this->_controlador);
        
        if(!$_methodAjax) {
            $_routeView = ROOT . 'views' . DS . $this->_controlador . DS . $_vista . '.tpl';
            if(is_readable($_routeView)){
                $this->assign('_contenido', $_routeView);
                $this->assign('_layoutParams', $_params);
                $this->display('template.tpl');
            } 
            else {
                // throw new Exception('Error de vista');
                echo "error de vista";
            }
         }
         else {
           $_routeView = ROOT . 'views' . DS . $_contentBox . DS . $_vista . '.tpl';
          $this->display($_routeView);
        }
    }
    
    public function getJsSingle() {
         return WEB_ROOT . 'public/js/'.$this->_controlador . '.js';
    }
    
    public function getUrlViewElement($_contentBox, $_viewTpl) {
      $_routeView = ROOT . 'views' . DS . $_contentBox . DS . $_viewTpl . '.tpl';
      if(file_exists($_routeView))
        return $_routeView;
      else
        return false;
    }
}

