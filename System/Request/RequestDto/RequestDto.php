<?php
namespace framework\System\Request\RequestDto;
use framework\root as root;
require_once(root::getRootInstance()->get_system_path()."Request\URL_Request.php");
use framework\System\Request\URL_Request as URL_Request;

class URL_RequestDto{



      protected static $client_request;

      protected static $client_instance;

      protected function set_client_request($client_request){
        URL_Request::$client_request = $client_request;
      }

      protected static function get_client_instance(){
        return URL_Request::$client_instance;
      }

      protected static function get_client_request(){
        return URL_Request::$client_request;
      }

}
