<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/task4.php';

class Task4Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testPairs(array $array, int $k, int $result): void
    {
        self::assertEquals($result, pairs($array, $k));
    }

    public function provider(): array
    {
        return [
            [
                [1, 5, 3, 4, 2],
                2,
                3
            ],
            [
                [1, 2, 3, 4],
                1,
                3
            ],
        ];
    }
}