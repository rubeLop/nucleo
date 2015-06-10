<?php
  /*
   * Clase : seasonModel
   *
   * @autor Ing. Ruben Lopez
   * @date mayo-2015
   * @date updated 06 Mayo 2015
   */
   
use Core\Model;
use Core\Hash;
class loginModel extends Model
{
    public $user;
    public $password;
    public $pass = null;
    public $resultado = array();
    public function __construct() {
        parent::__construct();
        
    }
    
    function getDatos ($user,$password){
      // $objConfig = ClassConfig::singleton();
      // $objDb = ClassDB::singleton();
      $hash = new Core\Hash;
      $pass = $hash->getHash($password);
      // FETCH_COLUMN,0
      $sql = "SELECT * FROM user WHERE email='{$user}' AND pass='{$pass}' LIMIT 1";
      $consulta = $this->db->prepare($sql);
      $consulta->execute();
      // $resultado = $consulta->fetchALL(PDO::FETCH_LAZY);
      $resultado = $consulta->fetchALL(PDO::FETCH_ASSOC);
      if(sizeof($resultado)>0) {
        return $resultado[0];
      }
      else{
        return false;
      }
        // $resultado = $consulta->fetch();
    }
}