<?php

namespace framework\System\View;

use framework\root as root;
use framework\System\View\Get_content as Get_content;

require_once(root::getRootInstance()->get_system_path()."View\Get_content.php");

class View extends Get_content{

  public function View($view,$data = null){

    $page = $this->get_content($view);
    if(count($this->search_template_filename($page)[0])>0){
        $filename = $this->template_filename($page);

    }


    $this->compile_view($page,$data);
  }

}
