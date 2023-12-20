<?php

$users = ['Jogn', 'Bob', "Tom", null];

$users = array_merge(
  $users,
  ['Sam', 'Jess']
);

echo '<pre>';
  print_r($users);
echo '</pre>';