<?php
  /*
   * Model -- Clase principal modelo 
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
   */


   namespace Core;
   use Core\ClassDB;

  abstract class Model
  {
      protected $db;
      /**
       * create a new instance of the database
       **/
      public function __construct() {
          //connect to PDO here.
          $this->db = new ClassDB();
      }
  }
