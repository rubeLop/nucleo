<?php
  /*
   * Clase : seasonModel
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
 
   */
   
use Core\Model;
use Core\Util;

class destinationModel extends Model
{
    public $_destinationName;
    public $_idDestination;
    
    // public function __construct() {
      // parent::__construct();  
    // }
    
    public function setDestinationName($_value) {
      $this->_destinationName = trim($_value);
    }
    
    public function getDestinationName() {
      return $this->_destinationName;
    }
    
    public function setIdDestination($_value) {
      $this->_idDestination = $_value;
    }
    public function getIdDestination() {
      return $this->_idDestination;
    }
    
    public function setStatus($_value) {
      $this->_status = $_value;
    }
    
    public function getStatus() {
      return $this->_status;
    }
    
    public function getDestination ($_pageCurrent, $_rankPagination, $_limitRow){        
      $_result = array();
      $util = new Util();
       
      $util->setPageCurrent($_pageCurrent);
      $util->setRankPagination($_rankPagination);
      $util->setLimitRow($_limitRow);
      $util->setVar('sqlCount',true);
      $util->setSqlNumRows("SELECT COUNT(*) AS countDestination FROM destination WHERE status = 'Active'");
      $util->setSqlRows("SELECT * FROM destination WHERE status = 'Active' LIMIT :limitFirst,:limitLast ");
      // ORDER BY name ASC
      $_result = $util->pagination();
      return $_result;
    }
    
    public function insertDestination() {
      $_sql = "INSERT INTO destination (name) VALUES (:name)";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_destinationName, PDO::PARAM_STR, 255);
      $consulta->execute();
      // $consulta->errorInfo();
    }
    
    public function infoDestination() {
      $_sql = "SELECT * FROM destination WHERE idDestination = :idDestination LIMIT 1";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idDestination', $this->_idDestination, PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetch();
      return $_result;
    }

    public function updateDestination() {
      $_sql = "UPDATE destination SET name = :name WHERE idDestination = :idDestination";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_destinationName, PDO::PARAM_STR,255);
      $consulta->bindParam(':idDestination', $this->_idDestination, PDO::PARAM_INT);
      $consulta->execute();
    }
    
    public function deleteDestination() {
      // $_sql = "DELETE FROM dsestination WHERE idDestinatiion = :idDestination";
      $_sql = "UPDATE destination SET status = 'Inactive' WHERE idDestination = :idDestination";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idDestination', $this->_idDestination, PDO::PARAM_INT);
      $consulta->execute();
    }
    
    public function enumDestination() {
      $_sql = "SELECT idDestination,name AS destinationName FROM destination WHERE status = :status";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':status', $this->getStatus(), PDO::PARAM_STR,255);
      $consulta->execute();
      $_result = $consulta->fetchALL(PDO::FETCH_ASSOC);
      return $_result;
    }
    
    
}