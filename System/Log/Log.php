<?php
namespace framework\System\Log;

use framework\root as root;

class log {

  private $logInit;
  private $filename;
  private $file_content="";
  private $type="";
  private $msg="";
  private $path;


  private function __construct($type,$msg){

      $this->type = $type;
      $this->msg = $msg;

      $this->path = root::getRootInstance()->get_root_path()."Application\\logs\\";

      $this->filename = $this->generate_file_name();

      if($this->check_log()){
        $this->append_file();
      }
      else{
          $this->write_file();
      }

  }

  public static function logging($type,$msg){
      new log($type,$msg);
  }

  private function stamp_log(){
      return '['.date('D Y-m-d h:i:s A').'] [client '.$_SERVER['REMOTE_ADDR'].']:';
  }

  private function generate_file_name(){
    return "LOG_".date('Ymd').".txt";
  }

  private function check_log(){
    return file_exists($this->path.$this->filename);
  }

  private function read_file(){
    $file = fopen($this->path.$this->filename,"rb");
    $file_content = fread($file,filesize($this->path.$this->filename));
    fclose($file);
    return $file_content;
  }

  private function write_file(){
    $file = fopen($this->path.$this->filename,"w");
    $content = $this->stamp_log().$this->type."->".$this->msg."\n";
    fwrite($file, $content);
    fclose($file);
  }

  private function append_file(){
    $file = fopen($this->path.$this->filename,"a");
    $content = $this->stamp_log().$this->type."->".$this->msg."\n";
    fwrite($file, $content);
    fclose($file);
  }

}
