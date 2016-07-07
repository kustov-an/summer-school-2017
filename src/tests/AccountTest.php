<?php
namespace SummerSchool;

require __DIR__."/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase{
  public function testAccount(){
    $account = new Account();
    $account->addMoney(5);
    $this->assertEquals(5 ,$account->getMoney());
  }
}
