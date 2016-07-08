<?php
namespace SummerSchool;

require __DIR__."/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase{
  public function testAccount(){
    $account = new Account("My account");
    $this->assertEquals(0, $account->getMoney());
  }

  public function testAddTransaction() {
    $account = new Account("My account");
    $category = new Category("My category", "Some description");
    $transaction = new Transaction(
      99,
      $category,
      new \DateTime(),
      "Best transaction"
    );
    $this->assertEquals(99, $transaction->getAmount());
    $account->addTransaction($transaction);
    $this->assertEquals(-99, $account->getMoney());

  }
}
