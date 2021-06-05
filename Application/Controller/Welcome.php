<?php
use framework\root as root;
use framework\System\Controller\Controller as Controller;

require_once(root::getRootInstance()->get_system_path()."Controller\Controller.php");

class Welcome extends Controller{

  public function __construct(){

    parent::__construct();
    echo "controller successful";
  }

  public function index(){

    $b = $this->a["test_model"]->test();
    var_dump($b);
  }

}
