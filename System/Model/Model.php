<?php
namespace framework\System\Model;

use framework\root as root;
use framework\System\Database\db as db;
require_once(root::getRootInstance()->get_system_path()."Database\db.php");

class Model {

  private $server;
  private $username;
  private $password;
  private $database;

  private $db;
  public $dbcnnt;

  public function __construct(){

    require_once(root::getRootInstance()->get_root_path()."Application\Config\DB.php");

    $this->db  = new db($this->server,$this->username,$this->password,$this->database);
    $this->db_connection();
  }

  public function db_connection(){
    $this->dbcnnt = $this->db->cnnt_db();
  }

  public function query($sql){
      $result = $this->dbcnnt->query("select 1");
      $result2 = $result->fetch_array(MYSQLI_ASSOC) or die("no connection");
      $result->free();
      mysqli_close($this->dbcnnt);
      return $result2;

  }

}
