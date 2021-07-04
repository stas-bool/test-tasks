<?php

$input = 'hello, world!';
print_r(formatString($input));

function formatString($input): string
{
    $pMarksPattern = '/[.,:;\-_?!()\[\]\'"]/';
    $withoutMarks = preg_replace($pMarksPattern, '', $input);

    $vowelsPattern = '/[aeiouy]/';
    $withUpperVowels = preg_replace_callback($vowelsPattern, function ($matches) {
        return strtoupper($matches[0]);
    }, $withoutMarks);
    return strrev($withUpperVowels);
}