<?php
namespace framework\System\Request;

use framework\System\Core\Core as core;
use framework\System\Request\RequestDto\URL_RequestDto as  URL_RequestDto;
use framework\root as root;

require_once(root::getRootInstance()->get_system_path()."Core\Core.php");
require_once(root::getRootInstance()->get_system_path()."Request\RequestDto\RequestDto.php");

class URL_Request extends URL_RequestDto{

      private function __construct(){

          $this::$client_instance =@ $this;
          $this::set_client_request($this->process_request());
      }

      public static function process_client_request(){

          if(!URL_Request::get_client_instance()){
             new URL_Request();
          }

          $instance = URL_Request::get_client_instance();

          //return client request
          return $instance::get_client_request();
      }

      private function process_request(){
        //var_dump($_SERVER['REQUEST_URI']);
          $app_path = "/".basename(core::get_object("Project_root")->get_app_path())."/";
          if($_SERVER['DOCUMENT_ROOT'] === str_replace('/','',$app_path)){
            $request =  ltrim($_SERVER['REQUEST_URI'], '/');
          }
          else{
            $request = str_replace($app_path,'',$_SERVER['REQUEST_URI']);
          }
          return $request;

        }
}
