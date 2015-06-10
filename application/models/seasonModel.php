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

class seasonModel extends Model
{
    public $_seasonName;
    public $_idSeason;
    
    // public function __construct() {
      // parent::__construct();  
    // }
    
    public function setSeasonName($_value) {
      $this->_seasonName = trim($_value);
    }
    
    public function getSeasonName() {
      return $this->_seasonName;
    }
    
    public function setIdSeason($_value) {
      $this->_idSeason = $_value;
    }
    public function getIdSeason() {
      return $this->_idSeason;
    }
    
    public function setStatus($_value) {
      $this->_status = $value;
    }
    
    public function getStatus() {
      return $this->_status;
    }
    
    public function getSeason ($_pageCurrent, $_rankPagination, $_limitRow){        
      $_result = array();
      $util = new Util();
       
      $util->setPageCurrent($_pageCurrent);
      $util->setRankPagination($_rankPagination);
      $util->setLimitRow($_limitRow);
      $util->setVar('sqlCount',true);
      $util->setSqlNumRows("SELECT COUNT(*) AS countSeason FROM season WHERE status = 'Active'");
      $util->setSqlRows("SELECT * FROM season WHERE status = 'Active' ORDER BY idSeason ASC LIMIT :limitFirst,:limitLast ");

      $_result = $util->pagination();
      return $_result;
    }
    
    public function insertSeason() {
      $_sql = "INSERT INTO season (name) VALUES (:name)";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_seasonName, PDO::PARAM_STR, 255);
      $consulta->execute();
      // $consulta->errorInfo();
    }
    
    public function deleteSeason() {
      // $_sql = "DELETE FROM season WHERE idSeason = :idSeason";
      $_sql = "UPDATE season SET status = 'Inactive' WHERE idSeason = :idSeason";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idSeason', $this->_idSeason, PDO::PARAM_INT);
      $consulta->execute();
    }
    
    public function infoSeason() {
      $_sql = "SELECT * FROM season WHERE idSeason = :idSeason LIMIT 1";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idSeason', $this->_idSeason, PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetch();
      return $_result;
    }
    
    public function updateSeason() {
      $_sql = "UPDATE season SET name = :name WHERE idSeason = :idSeason";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_seasonName, PDO::PARAM_STR,255);
      $consulta->bindParam(':idSeason', $this->_idSeason, PDO::PARAM_INT);
      $consulta->execute();
    }
}