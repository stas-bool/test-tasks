<?php

$arr = [1, 5, 3, 4, 2];
$k = 2;
print_r(pairs($arr, $k));

function pairs($arr, $k): int
{
    $result = 0;
    foreach ($arr as $iKey => $iValue) {
        foreach ($arr as $jKey => $jValue) {
            if ($iKey === $jKey) { continue; }
            if ($iValue - $jValue === $k) {
                $result++;
            }
        }
    }
    return $result;
}