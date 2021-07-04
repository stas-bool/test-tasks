<?php

$arr = [3, -7, 0];
print_r(minAbsDiff($arr));

function minAbsDiff(array $array): int
{
    $minAbsDiff = INF;
    foreach ($array as $iKey => $iValue) {
        foreach ($array as $jKey => $jValue) {
            if ($iKey === $jKey) { continue; }
            $absDiff = abs($iValue - $jValue);
            if ($absDiff < $minAbsDiff) {
                $minAbsDiff = $absDiff;
            }
        }
    }
    return $minAbsDiff;
}