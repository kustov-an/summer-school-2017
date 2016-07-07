<?php
namespace SummerSchool;

class User {
  private $username;
  private $password;
  private $accounts;

  public function __construct($username, $password) {
    if(strlen($password) < 6 ){
      throw new \Exception("Password must be 6 characters or longer");
    }
    $this->username = $username;
    $this->password = $password;
    $this->accounts = [];
  }

  public function addAccount($accountName) {
    $account = new Account($accountName);
    $this->accounts[] = $account;
  }

}
