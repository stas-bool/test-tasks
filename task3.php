<?php

$arr = [3, -7, 0];
print_r(minAbsDiff($arr));

function minAbsDiff(array $array): int
{
    $minAbsDiff = INF;
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $absDiff = abs($array[$i] - $array[$j]);
            if ($absDiff < $minAbsDiff) {
                $minAbsDiff = $absDiff;
            }
        }
    }
    return $minAbsDiff;
}