<?php

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