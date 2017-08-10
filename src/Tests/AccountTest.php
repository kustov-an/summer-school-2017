<?php
namespace SummerSchool\Tests;

use PHPUnit\Framework\TestCase;
use SummerSchool\Account;
use SummerSchool\Category;
use SummerSchool\Transaction;

class AccountTest extends TestCase{
  private $account;

  public function setUp()
  {
    $this->account = new Account("My account");
  }

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

  public function dataTestSpent()
  {
    return [
      [
        [
          [10, '2017-07-05'],
          [30, '2017-07-06'],
          [5, '2017-08-01']
        ],
        '2017-07-01', '2017-07-20', 40
      ],
      [
        [
          [10, '2017-07-05'],
          [30, '2017-07-06'],
          [5, '2017-08-01']
        ],
        '2017-07-01', '2017-07-20', 30
      ]
    ];
  }

  /**
  * @dataProvider dataTestSpent
  **/
  public function testGetSpentInPeriod($transactions, $start, $end, $expected)
  {
    $category = new Category("My category", "Some description");
    foreach ($transactions as $transactionData) {
      $transaction = $this->createMock(Transaction::class);
      $transaction->expects($this->any())
      ->method('getDate')
      ->will($this->returnValue(new \DateTime($transactionData[1])));
      $transaction->expects($this->any())
      ->method('getAmount')
      ->will($this->returnValue($transactionData[0]));

      $this->account->addTransaction($transaction);
    }
    $spent = $this->account->getSpentInPeriod(
      new \DateTime($start), new \DateTime($end));
    $this->assertEquals($expected, $spent);

  }
}
