<?php

namespace framework;

require_once("rootDt.php");

use framework\rootDt as rootDt;

class root
  extends rootDt{

    private static $init;

    private function __construct(){

      $this->init();

      $this::$init =@ $this;

    }

    private function init(){

        /*
        *   root path
        *   ex. drive:\xampp\htdocs\project\
        *
        */
        $this->set_root_path(realpath("").DIRECTORY_SEPARATOR);

        /*
        * system path
        * ex. drive:\xampp\htdocs\project\System\
        */

        $this->set_system_path(realpath("System").DIRECTORY_SEPARATOR);

        /*
        * application path
        * ex. Projectname
        */

        $this->set_app_path(basename(__DIR__));

    }

    public static function rootInit(){

            if(!root::getRootInstance()){
                new root();
            }

    }


    public static function getRootInstance(){

        return root::$init;
    }

}
