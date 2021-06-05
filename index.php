<?php
namespace framework;

require_once("root.php");

use framework\root as root;
use framework\System\Log\Log as log;
use framework\System\Core\Core as core;
use framework\System\Routing\Routing as routing;
use framework\System\Model\Model as model;


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
