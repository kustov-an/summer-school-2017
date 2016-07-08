<?php
namespace SummerSchool;

class Transaction {
  private $category;
  private $date;
  private $description;
  private $amount;

  public function __construct($amount, Category $category, \DateTime $date, $description) {
    $this->amount = $amount;
    $this->category = $category;
    $this->description = $description;
    $this->date = $date;
  }

  public function getAmount() {
    return $this->amount;
  }

  public function getDate() {
    return $this->date;
  }
}
