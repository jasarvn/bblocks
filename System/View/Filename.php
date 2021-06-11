<?php
namespace framework\System\View;
use framework\root as root;
use framework\System\View\Process_view as Process_view;

require_once(root::getRootInstance()->get_system_path()."View/Data/Constant.php");
require_once(root::getRootInstance()->get_system_path()."View\Process_view.php");

class Filename extends Process_view{

    public function template_filename($content){

        return $this->process_template_filename($content);
    }

    private function process_template_filename($content){
        return preg_replace(ACTUAL_TEMPLATE_FILENAME,"",$this->search_template_filename($content)[0][0]);

    }

    protected function search_template_filename($content){
        preg_match_all(SEARCH_TEMPLATE_FILENAME,$content,$result);
        return $result;
    }

}
