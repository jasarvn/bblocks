<?php
namespace framework;

require_once("root.php");

use framework\root as root;
use framework\System\Log\Log as log;
use framework\System\Core\Core as core;
use framework\System\Routing\Routing as routing;
/*
*
*/
root::rootInit();

/*
*
*/

require_once(root::getRootInstance()->get_system_path()."Log\Log.php");

log::logging("Status","Load Core.php.");
require_once(root::getRootInstance()->get_system_path()."Core\Core.php");

log::logging("Status","Load Routing.php.");
require_once(root::getRootInstance()->get_system_path()."Routing\Routing.php");


/*
*
*/
log::logging("Status","Initialize Core.");
core::initiate_core();


 //get the event occur date time,when it will happened
 /*$log_file = "LOG_".date('Ymd').".txt";
 $arLogData['event_datetime']=;

if(file_exists(root::getRootInstance()->get_system_path().$log_file)){
  $myfile = fopen(root::getRootInstance()->get_system_path().$log_file, "r");
  $txt = fread($myfile,filesize(root::getRootInstance()->get_system_path().$log_file));
  fclose($myfile);
}

$myfile = fopen(root::getRootInstance()->get_system_path().$log_file, "w");
fwrite($myfile, $txt);
$txt = $arLogData['event_datetime']."\n";
fwrite($myfile, $txt);
fclose($myfile);*/
