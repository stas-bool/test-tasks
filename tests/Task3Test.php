<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/task3.php';

class Task3Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testMinAbsDiff(array $array, int $result): void
    {
        self::assertEquals($result, minAbsDiff($array));
    }

    public function provider(): array
    {
        return [
            [
                [3, -7, 0],
                3
            ],
            [
                [-59, -36, -13, -53, -92, 1, -2, -96, -54, 75],
                1
            ],
            [
                [1, -3, 71, 68, 17],
                3
            ],
        ];
    }
}