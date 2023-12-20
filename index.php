<?php

declare(strict_types=1);

function isArmstrongNumber(int $number) : bool
{
    $numberToString = strval($number);
    $digitsArray = str_split($numberToString);
    $numberOfDigits = count($digitsArray);
    $poweredDigits = array_map(function ($digit) use ($numberOfDigits) {
      return pow((int) $digit, $numberOfDigits);
    }, $digitsArray);
    $sumOfPoweredDigits = array_sum($poweredDigits);

    return $sumOfPoweredDigits === $number;
}

echo isArmstrongNumber(154); 