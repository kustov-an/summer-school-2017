<?php
namespace SummerSchool;

class Account {
  private $money;

  public function addMoney($moneyToAdd){
    $this->money += $moneyToAdd;
  }

  public function getMoney() {
    return $this->money;
  }
}
