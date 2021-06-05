<?php
use framework\root as root;
use framework\System\Model\Model as Model;

require_once(root::getRootInstance()->get_system_path()."Model\Model.php");

class test_model extends Model{

  public function __construct(){
     parent::__construct();
  }

  public function test(){
    return $this->query("select 1");
  }

}
