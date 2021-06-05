<?php
namespace framework\System\Routing;
use framework\root as root;

class routing{

    private static $routing_instance;
    private $webURL;
    private $project_root;

    private function __construct(){
        $this::$routing_instance =& $this;
        $this->project_root = root::getRootInstance();
    }

    public static function init_routing(){
        if(!routing::get_route_instance()){
            new routing();
        }

    }

    public static function get_route_instance(){
      return routing::$routing_instance;
    }

    public function set_webURL($request,$controller){
        $this->webURL[$request] = $controller;
    }

    public function get_webURL(){
        return $this->webURL;
    }

    public function process_request($url_request , $routes){

        //separate controller and method
        $process = explode("@",$routes[$url_request]);

        $controller = $process[0];
        $controller_path = $this->project_root->get_root_path()."Application\\Controller\\".$process[0].".php";
        $method = $process[1];

        require_once($controller_path);
        $cntrl = new $controller();
        $cntrl->$method();
    }

}
