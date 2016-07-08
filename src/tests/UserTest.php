<?php
namespace SummerSchool;

require __DIR__."/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
  public function testNewUser(){
    $this->expectException(\Exception::class);
    $user = new User("username", "123456");
  }
}
