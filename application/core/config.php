<?php
/*
 * Config -- constantes generales
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
 
  switch($_SERVER['HTTP_HOST']){
    case "localhost:8080":
    case "localhost": // configuracion local
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'quotation');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_CHAR', 'utf8');
        define('WEB_ROOT', "http://".$_SERVER['HTTP_HOST']."/ejemplo/");
      break;
      
    default:	 //configuracion server de produccion.
        define('DB_HOST', 'mysql.2freehosting.com');
        define('DB_NAME', 'u142942981_cot');
        define('DB_USER', 'u142942981_usr');
        define('DB_PASS', 'carto_1s2');
        define('DB_CHAR', 'utf8');
        define('WEB_ROOT', 'http://sistema-demo.3eeweb.com/');
  }
  //mvc default
  define('DEFAULT_CONTROLLER', 'index');
  define('DEFAULT_METHOD', 'index');
  define('DEFAULT_LAYOUT', 'cotizador');
  //datos de template
  define('THEME','cotizador');
  define('APP_NAME', 'Cotizador v1');
  define('APP_SLOGAN', 'Cotizador 2015');
  define('APP_COMPANY', 'www.yoprograming.com');
  define('APP_TITLE', 'Cotizador V1 2015 DEMO');
  
  define('LANG_ERROR', 'ESP');
  
  //sesion
  define('SESSION_TIME', 20);
  //cadena explicita
  define('HASH_KEY','a09120malskm_ey652');
  define('HASH_ALGORITMO','sha512');
  //paginacion
  define('LIMIT_ROW',10);
  define('RANK_PAGINATION',3);