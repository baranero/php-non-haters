<?php

declare(strict_types=1);

function getNewName(): string {
  $letters = range('A', 'Z');
  $randomKeys = array_rand($letters, 2);
  $randomLetters = array_intersect_key($letters, array_flip($randomKeys));
  $randomLettersString = implode('', $randomLetters);

    $randomNumbers = mt_rand(100, 999);
    $stringNumber = strval($randomNumbers);

    return $randomLettersString . $stringNumber;
}

$randomString = getNewName();
echo $randomString;