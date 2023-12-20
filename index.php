<?php

$users = ['Jogn', 'Bob', "Tom", null];

$users = array_map(
  fn($user) => strtoupper($user),
  $users
);

echo '<pre>';
  print_r($users);
echo '</pre>';