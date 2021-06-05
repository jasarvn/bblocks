<?php

namespace framework;

class rootDt{

  private $root_path;

  private $system_path;

  private $app_path;

  protected function set_root_path( $root_path ){
      $this->root_path = $root_path;
  }

  public function get_root_path(){
      return $this->root_path;
  }

  protected function set_system_path( $system_path ){
      $this->system_path = $system_path;
  }

  public function get_system_path(){
      return $this->system_path;
  }

  public function set_app_path( $app_path ){
      $this->app_path = $app_path;
  }

  public function get_app_path(){
      return $this->app_path;
  }


  /*  private $app_path;

    private $system;

    private $_temp;

    private $system_path;

    private $basepath;


    protected function setApp_Path( $app_path ){
        $this->app_path = $app_path;
    }

    protected function setSystem( $system ){
        $this->system = $system;
    }

    protected function set_temp( $_temp ){
       $this->_temp = $_temp;
    }

    protected function setSystem_Path( $system_path ){
       $this->system_path = $system_path;
    }

    protected function setbasepath( $basepath ){
       $this->basepath = $basepath;
    }

    public function getSystem(){
        return $this->system;
    }

    public function get_temp(){
        return $this->_temp;
    }

    public function getSystem_path(){
        return $this->system_path;
    }

    public function getbasepath(){
       return $this->basepath;
    }

    public function getAppPath(){
      return $this->app_path;
    }
    */
}
