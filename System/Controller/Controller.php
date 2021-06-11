<?php
namespace framework\System\Controller;

use framework\root as root;
use framework\System\View\View as View;

require_once(root::getRootInstance()->get_system_path()."View\View.php");

class Controller extends View{

  protected $a;

  public function __construct(){

    $path_2 = root::getRootInstance()->get_root_path()."Application\\Models\\test_model.php";
    require_once($path_2);


    //loading models to controller
    $contrlr = "test_model";
    $this->a[$contrlr] = new $contrlr();

  }


}
