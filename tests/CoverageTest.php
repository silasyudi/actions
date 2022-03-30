<?php

namespace App\Tests;

use App\Coverage;
use PHPUnit\Framework\TestCase;

class CoverageTest extends TestCase
{

    public function testIsPar(): void
    {
        $this->assertFalse((new Coverage())->isPar(1));
        $this->assertTrue((new Coverage())->isPar(2));
    }
}
