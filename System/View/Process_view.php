<?php
namespace framework\System\View;

use framework\root as root;

class Process_view{

  public function compile_view($content,$data = null){

      include(root::getRootInstance()->get_system_path()."View\Data\Variables.php");

      $temp_file = tmpfile();

      fwrite($temp_file,$content);

      $path = stream_get_meta_data($temp_file)["uri"];

      fseek($temp_file, 0);

      include($path);

      fclose($temp_file);
  }

}
