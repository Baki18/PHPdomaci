<?php
class User {
    private $username;
    private $password;
    private $name;
  
    public function __construct($username=null, $password=null, $name=null) {
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
    }
  
    public function getUsername() {
      return $this->username;
    }
  
    public function getPassword() {
      return $this->password;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function setUsername($username) {
      $this->username = $username;
    }
  
    public function setPassword($password) {
      $this->password = $password;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
  }
?>  