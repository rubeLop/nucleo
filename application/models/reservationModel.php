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

class reservationModel extends Model
{
    public $_reservationName;
    public $_idReservation;
    
    // public function __construct() {
      // parent::__construct();  
    // }
    
    public function setReservationName($_value) {
      $this->_reservationName = trim($_value);
    }
    
    public function getReservationName() {
      return $this->_reservationName;
    }
    
    public function setIdReservation($_value) {
      $this->_idReservation = $_value;
    }
    
    public function getIdReservation() {
      return $this->_idReservation;
    }
    
    public function setStatus($_value) {
      $this->_status = $value;
    }
    
    public function getStatus() {
      return $this->_status;
    }
    
    public function getReservation ($_pageCurrent, $_rankPagination, $_limitRow){        
      $_result = array();
      $util = new Util();
       
      $util->setPageCurrent($_pageCurrent);
      $util->setRankPagination($_rankPagination);
      $util->setLimitRow($_limitRow);
      $util->setVar('sqlCount',true);
      $util->setSqlNumRows("SELECT COUNT(*) AS countReservation FROM reservation WHERE status = 'Active'");
      $util->setSqlRows("SELECT * FROM reservation WHERE status = 'Active' ORDER BY idReservation ASC LIMIT :limitFirst,:limitLast ");

      $_result = $util->pagination();
      return $_result;
    }
    
    public function insertReservation() {
      $_sql = "INSERT INTO reservation (name) VALUES (:name)";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->getReservationName(), PDO::PARAM_STR, 255);
      $consulta->execute();
      // $consulta->errorInfo();
    }
    
    
    public function infoReservation() {
      $_sql = "SELECT * FROM reservation WHERE idReservation = :idReservation LIMIT 1";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idReservation', $this->getIdReservation(), PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetch();
      return $_result;
    }
    
    public function updateReservation() {
      $_sql = "UPDATE reservation SET name = :name WHERE idReservation = :idReservation";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->getReservationName(), PDO::PARAM_STR,255);
      $consulta->bindParam(':idReservation', $this->getIdReservation(), PDO::PARAM_INT);
      $consulta->execute();
    }

    public function deleteWeek() {
      // $_sql = "DELETE FROM season WHERE idSeason = :idSeason";
      $_sql = "UPDATE reservation SET status = 'Inactive' WHERE idReservation = :idReservation";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idReservation', $this->getIdReservation(), PDO::PARAM_INT);
      $consulta->execute();
    }
}