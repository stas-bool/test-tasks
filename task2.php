<?php

$a = [1, 2, 3];
$k = 2;
$q = [2, 0, 1];
print_r(ivanAnswersQuestions($a, $k, $q));

function ivanAnswersQuestions(array $array, int $k, array $questions): array
{
    for ($i = 0; $i < $k; $i++) {
        $lastEl = array_pop($array);
        array_unshift($array, $lastEl);
    }

    $result = [];
    foreach ($questions as $question) {
        $result[] = $array[$question];
    }
    return $result;
}
