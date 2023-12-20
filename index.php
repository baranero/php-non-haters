<?php

declare(strict_types = 1);

require_once 'Account.php';

$myAccount = new Account('Tom', 200);
$johnsAccount = new Account('John', 10);

$myAccount -> balance = 20;

var_dump($myAccount);
echo '<br>';
var_dump($johnsAccount);