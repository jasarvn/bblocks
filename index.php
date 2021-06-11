<?php
namespace framework;

require_once("root.php");

use framework\root as root;
use framework\System\Log\Log as log;
use framework\System\Core\Core as core;

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

/*
*
*/
log::logging("Status","Initialize Core.");
core::initiate_core();


//read main page
