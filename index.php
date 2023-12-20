<?php

require_once 'Account.php';

$myAccount = new Account;
$johnsAccount = new Account;

var_dump($myAccount -> balance);
echo '<br>';
var_dump($johnsAccount);