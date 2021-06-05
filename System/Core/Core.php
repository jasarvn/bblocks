<?php
namespace framework\System\Core;

use framework\root as root;
use framework\System\Core\CoreDto\CoreDto as CoreDto;
use framework\System\Request\URL_Request as URL_Request;
use framework\System\Routing\Routing as routing;
use framework\System\Log\Log as Log;

require_once(root::getRootInstance()->get_system_path()."Core\CoreDto\CoreDto.php");
require_once(root::getRootInstance()->get_system_path()."Request\URL_Request.php");
require_once(root::getRootInstance()->get_system_path()."Routing\Routing.php");
require_once(root::getRootInstance()->get_system_path()."Log\Log.php");

class core extends CoreDto{

    private static $core_instance;

    private function __construct(){
        $this::$core_instance =@ $this;
        $this->bootup_core();
    }

    public static function initiate_core(){

        if (!core::core_getInstance()){
            new core();
        }
    }

    private static function core_getInstance(){
        return core::$core_instance;
    }

    public static function get_object( $object ){
        return core::$core_instance->getObject()[$object];
    }

    private function bootup_core(){


        // load project root directory to core
        log::logging("Status","Load Project route to core");
        $this->setObject(array("Project_root"=>root::getRootInstance()));

        //load client url request
        log::logging("Status","Load client url to core");
        $this->setObject(array("URL_Request"=>URL_Request::process_client_request()));

        //load Routing
        log::logging("Status","Initialize Routing");
        routing::init_routing();

        log::logging("Status","Load Routing to core");
        $this->setObject(array("WEB_Routing"=>routing::get_route_instance()));

        //Load Routes
        log::logging("Status","Load Routes");
        require_once(root::getRootInstance()->get_system_path()."Routing\Routes.php");

        // get all the route list added by the developer
        log::logging("Status","Get Developer's Route List");
        $routes = $this->get_object("WEB_Routing")->get_webURL();

        log::logging("Status","Get Url Reqest");
        $url_request = $this->get_object("URL_Request");

        log::logging("Request",$this->get_object("URL_Request"));
        if(array_key_exists ($url_request , $routes )){
          $this->get_Object("WEB_Routing")->process_request($url_request , $routes);
        }else{
          echo "error";
        }
    }


}
