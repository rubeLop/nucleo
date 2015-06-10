<?php
/*
 * ClassDB -- Clase base de datos 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
 
namespace Core;
use Core\Main;
use \PDO;

class ClassDB extends PDO{
	
  private static $instance = null;

  protected $db;
    
    #Constructor
    function __construct(){

    try {
          parent::__construct('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS,
                  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
          $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e) {
          echo 'Connection failed: ' . $e->getMessage();;
      }
    }
    
    public static function singleton() 
    {
      if( self::$instance == null ) 
      {
        self::$instance = new self();
      }
      return self::$instance;
    }

}
?>