<?php
namespace framework\System\View;

use framework\root as root;
use framework\System\View\Filename as filename;

require_once(root::getRootInstance()->get_system_path()."View\Filename.php");

class Get_content extends filename{

  public function get_content($view_name){
    return file_get_contents(root::getRootInstance()->get_root_path()."Application\Views\\".$view_name);
  }

}
