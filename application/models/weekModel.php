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

class weekModel extends Model
{
    public $_weekName;
    public $_idWeek;
    
    // public function __construct() {
      // parent::__construct();  
    // }
    
    public function setWeekName($_value) {
      $this->_weekName = trim($_value);
    }
    
    public function getWeekName() {
      return $this->_weekName;
    }
    
    public function setIdWeek($_value) {
      $this->_idWeek = $_value;
    }
    
    public function getIdWeek() {
      return $this->_idWeek;
    }
    
    public function setStatus($_value) {
      $this->_status = $value;
    }
    
    public function getStatus() {
      return $this->_status;
    }
    
    public function getWeek ($_pageCurrent, $_rankPagination, $_limitRow){        
      $_result = array();
      $util = new Util();
       
      $util->setPageCurrent($_pageCurrent);
      $util->setRankPagination($_rankPagination);
      $util->setLimitRow($_limitRow);
      $util->setVar('sqlCount',true);
      $util->setSqlNumRows("SELECT COUNT(*) AS countWeek FROM week WHERE status = 'Active'");
      $util->setSqlRows("SELECT * FROM week WHERE status = 'Active' ORDER BY idWeek ASC LIMIT :limitFirst,:limitLast ");

      $_result = $util->pagination();
      return $_result;
    }
    
    public function insertWeek() {
      $_sql = "INSERT INTO week (name) VALUES (:name)";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->getWeekName(), PDO::PARAM_STR, 255);
      $consulta->execute();
      // $consulta->errorInfo();
    }
    
    
    public function infoWeek() {
      $_sql = "SELECT * FROM week WHERE idWeek = :idWeek LIMIT 1";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idWeek', $this->getIdWeek(), PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetch();
      return $_result;
    }
    
    public function updateWeek() {
      $_sql = "UPDATE week SET name = :name WHERE idWeek = :idWeek";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->getWeekName(), PDO::PARAM_STR,255);
      $consulta->bindParam(':idWeek', $this->getIdWeek(), PDO::PARAM_INT);
      $consulta->execute();
    }

    public function deleteWeek() {
      // $_sql = "DELETE FROM season WHERE idSeason = :idSeason";
      $_sql = "UPDATE week SET status = 'Inactive' WHERE idWeek = :idWeek";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idWeek', $this->getIdWeek(), PDO::PARAM_INT);
      $consulta->execute();
    }
}