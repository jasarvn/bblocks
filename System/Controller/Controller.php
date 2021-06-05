<?php
namespace framework\System\Controller;
use framework\root as root;
class Controller{

  protected $a;

  public function __construct(){
    $path_2 = root::getRootInstance()->get_root_path()."Application\\Models\\test_model.php";
    require_once($path_2);

    $contrlr = "test_model";
    $this->a[$contrlr] = new $contrlr();
    
  }


}
