<?php
use framework\root as root;
$route = $this->get_Object("WEB_Routing");
require_once(root::getRootInstance()->get_root_path()."Application\\route\web.php");
