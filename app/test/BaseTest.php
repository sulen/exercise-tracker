<?php

namespace app\test;

use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase {
    public function testWorks(): void
    {
        $this->assertEquals('lul', 'lul');
    }
}