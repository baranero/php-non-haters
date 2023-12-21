<?php

declare(strict_types = 1);

// require_once 'App/Account.php';
// require_once 'App/SocialMedia.php';

spl_autoload_register(function($class) {
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";
  
  require_once $path;
});

use App\{Account, SocialMedia};

$myAccount = new Account('John', 20);
new DateTime();


$myAccount?->deposit(80)->deposit(30);

var_dump($myAccount);