<?php

namespace tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/task5.php';

class Task5Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testFormatString(string $input, string $result): void
    {
        self::assertEquals($result, formatString($input));
    }

    public function provider(): array
    {
        return [
            ['hello, world!', 'dlrOw OllEh'],
            ['Lorem ipsum dolor sit amet?!', 'tEmA tIs rOlOd mUspI mErOL']
        ];
    }
}