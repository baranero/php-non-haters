<?php

declare(strict_types = 1);

require_once 'Account.php';

use App\Account;

$myAccount = new Account('John', 20);



$myAccount?->deposit(80)->deposit(30);

var_dump($myAccount);