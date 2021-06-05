<?php
namespace framework\System\Database;

class db{

  private $conn;

  private $server;
  private $username;
  private $password;
  private $database;

  public function __construct($server,$username,$password,$database){

      $this->server = $server;
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;

  }

  public function cnnt_db(){
    return mysqli_connect(
        $this->server,
        $this->username,
        $this->password,
        $this->database
      );
  }

}
