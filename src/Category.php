<?php
namespace SummerSchool;

class Category {
  private $name;
  private $description;

  public function __construct($name, $description) {
    if(!$name){
      throw new \Exception("Name can't be empty");
    }
    $this->name = $name;
    $this->description = $description;
  }
}
