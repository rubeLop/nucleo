<?php
// use Core\Model;
  /*
   * Clase : seasonModel
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 04 Junio 2015
 
   */
 
class indexModel extends Model
{
  public function __construct() {
    parent::__construct();
  }
  
  function getDatos (){
    // $objConfig = ClassConfig::singleton();
    // $objDb = ClassDB::singleton();
    $sql = "CALL mostrar_lobby";
    $consulta = $this->db->prepare($sql);
    $consulta->execute();
    $resultado[0] = $consulta->fetchALL(PDO::FETCH_ASSOC);
    
    $sql = "SELECT idDestination, name FROM destination";
    $consulta = $this->db->prepare($sql);
    $consulta->execute();
    $resultado[1] = $consulta->fetchALL(PDO::FETCH_ASSOC);
    
    return $resultado;
  }
}
