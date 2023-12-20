<?php

declare(strict_types=1);

function slices(string $series, int $size) : array
{
    $result = [];

    if ($size > strlen($series) || $size < 1) {
      return $result;
    }

    for ($i = 0; $i <= strlen($series) - $size; $i++) {
      $substring = substr($series, $i, $size);
      $result[] = $substring;
  }

  return $result;
};

print_r(slices('12345', 3));