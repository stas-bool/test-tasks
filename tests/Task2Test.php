<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/task2.php';

class Task2Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testIvanAnswersQuestions(array $a, int $k, array $q, array $result): void
    {
        self::assertEquals($result, ivanAnswersQuestions($a, $k, $q));
    }

    public function provider(): array
    {
        return [
            [
                [1, 2, 3],
                2,
                [2, 0, 1],
                [1, 2, 3]
            ],
            [
                [23, 65, 2, 0, 0],
                7,
                [0, 2, 4],
                [0, 23, 2]
            ],
        ];
    }
}