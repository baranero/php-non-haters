<?php

class Account {
  public string $name;
  public float $balance = 5;

  public function __construct(string $newName, float $newBalance) {
    $this -> name = $newName;
    $this -> balance = $newBalance;
  }


}