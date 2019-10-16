<?php

class User 
{
  //NO EXECUTABLE CODE HERE


  public $id = null;
  public $username = null;
  public $name = null;
  public $password = null;
  public $number_of_posts = null;
  public $created_at = null 
  
  public function __construct($username) //has no relation to 'username'
  {
    $this->username=$username;
    $this->created_at = date('Y-m-d H:i:s');
  }

  public function dumpMe()
  {
    var_dump($this);
  //allows to use $steve, instead of var_dump: $steve->dumpMe()
  }

  public function __destruct()
  {
    
  }
}

