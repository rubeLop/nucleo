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

class lobbyModel extends Model
{
    public $_lobbyName;
    public $_idLobby;
    public $_idDestination;
    
    // public function __construct() {
      // parent::__construct();  
    // }
    
    public function setLobbyName($_value) {
      $this->_lobbyName = trim($_value);
    }
    
    public function getLobbyName() {
      return $this->_lobbyName;
    }
    
    public function setIdLobby($_value) {
      $this->_idLobby = $_value;
    }
    
    public function getIdLobby() {
      return $this->_idLobby;
    }
    
    public function setIdDestination($_value) {
      $this->_idDestination = $_value;
    }

    public function getIdDestination() {
      return $this->_idDestination;
    }
    
    public function getLobby ($_pageCurrent, $_rankPagination, $_limitRow){        
      $_result = array();
      $util = new Util();
       
      $util->setPageCurrent($_pageCurrent);
      $util->setRankPagination($_rankPagination);
      $util->setLimitRow($_limitRow);
      // $util->setSqlNumRows("SELECT COUNT(*) AS numLobby FROM lobby WHERE status = 'Active'");
      $util->setVar('sqlCount',true);
      $util->setSqlNumRows("CALL proc_countLobby('Active')");
      $util->setSqlRows("CALL proc_pageLobby(:limitFirst,:limitLast,'Active')");
      $_result = $util->pagination();
      return $_result;
    }
    
    public function insertLobby() {
      $_sql = "INSERT INTO lobby (name,idDestination) VALUES (:name,:idDestination)";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_lobbyName, PDO::PARAM_STR, 255);
      $consulta->bindParam(':idDestination', $this->_idDestination, PDO::PARAM_INT);
      $consulta->execute();
      // $consulta->errorInfo();
    }
    
    public function infoLobby() {
      $_sql = "SELECT * FROM lobby WHERE idLobby = :idLobby LIMIT 1";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idLobby', $this->_idLobby, PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetch();
      return $_result;
    }

    public function updateLobby() {
      $_sql = "UPDATE lobby SET name = :name, idDestination = :idDestination WHERE idLobby = :idLobby";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':name', $this->_lobbyName, PDO::PARAM_STR,255);
      $consulta->bindParam(':idLobby', $this->_idLobby, PDO::PARAM_INT);
      $consulta->bindParam(':idDestination', $this->_idDestination, PDO::PARAM_INT);
      $consulta->execute();
    }
    
    public function deleteLobby() {
      // $_sql = "DELETE FROM lobby WHERE idDestination = :idLobby";
      $_sql = "UPDATE lobby SET status = 'Inactive' WHERE idLobby = :idLobby";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idLobby', $this->_idLobby, PDO::PARAM_INT);
      $consulta->execute();
    }
    
    public function enumLobby() {
      $_sql = "SELECT * FROM lobby WHERE idDestination = :idDestination AND status = 'Active'";
      $consulta = $this->db->prepare($_sql);
      $consulta->bindParam(':idDestination', $this->getIdDestination(), PDO::PARAM_INT);
      $consulta->execute();
      $_result = $consulta->fetchALL(PDO::FETCH_ASSOC);
      return $_result;
    }
    
    
    
}