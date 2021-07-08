<?php

function formatString(string $input): string
{
    $pMarksPattern = '/[.,:;\-_?!()\[\]\'"]/';
    $withoutMarks = preg_replace($pMarksPattern, '', $input);

    $vowelsPattern = '/[aeiouy]/';
    $withUpperVowels = preg_replace_callback($vowelsPattern, function ($matches) {
        return strtoupper($matches[0]);
    }, $withoutMarks);
    return strrev($withUpperVowels);
}