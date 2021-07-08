<?php

function pairs(array $arr, int $k): int
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