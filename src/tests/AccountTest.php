<?php
namespace SummerSchool;

require __DIR__."/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase{
  public function testAccount(){
    $account = new Account("My account");
    $this->assertEquals(0, $account->getMoney());
  }
}
