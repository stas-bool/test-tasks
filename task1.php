<?php

$array = [1, 2, 3, 4, 5];
print_r(secondMax($array)); // 4

function secondMax(array $array): int
{
    $max = max($array);
    $secondMax = min($array);
    foreach ($array as $item) {
        if ($item > $secondMax && $item < $max) {
            $secondMax = $item;
        }
    }
    return $secondMax;
}