<?php
namespace SummerSchool\Tests;

use PHPUnit\Framework\TestCase;
use SummerSchool\User;

class UserTest extends TestCase {
  public function testNewUser(){
    $this->expectException(\Exception::class);
    $user = new User("username", "12345");
  }
}
