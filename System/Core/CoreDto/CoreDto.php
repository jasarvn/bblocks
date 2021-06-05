<?php
namespace framework\System\Core\CoreDto;

class CoreDto{

    private $Object;

    protected function setObject( $object ){

      foreach($object as $key => $value){
          $this->Object[$key] = $value;
      }


    }

    public function getObject(){
      return $this->Object;
    }

}
