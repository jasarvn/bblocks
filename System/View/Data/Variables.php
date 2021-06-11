<?php
if(is_array($data)){
  foreach($data as $key=>$value){
      ${$key} = $value;
  }
}
