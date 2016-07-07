<?php
namespace SummerSchool;

class Account {
  private $name;
  private $money;
  private $transactions;

  public function __construct($name, $initialMoney = 0){
    $this->name = $name;
    $this->money = $initialMoney;
    $this->transactions = [];
  }

  public function getMoney() {
    return $this->money;
  }

  public function addTransaction(Transaction $transaction) {
    $this->transactions[] = $transaction;
    $this->money = $this->money - $transaction->getAmount();
  }

  public function getSpentInPeriod(\DateTime $periodStart, \DateTime $periodEnd) {
    $spent = 0;
    foreach ($this->transactions as $transaction) {
      if($transaction->getDate() >= $periodStart && $transaction->getDate() <= $periodEnd ){
        $spent = $spent + $transaction->getAmount();
      }
    }
  }
}
