<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/task1.php';

class Task1Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testSecondMax(array $array, int $result): void
    {
        self::assertEquals($result, secondMax($array));
    }

    public function provider(): array
    {
        return [
            [
                [1, 2, 3, 4],
                3
            ],
            [
                [34, 0, -3],
                0
            ],
            [
                [-10, -5, -3, -1],
                -3
            ],
            [
                [0, 1],
                0
            ],
        ];
    }
}