<?php

namespace Tests;

use App\CountingBits;
use PHPUnit\Framework\TestCase;

class CountingBitsTest extends TestCase
{
    public function testCorrectCount()
    {
        $this->assertEquals(0, CountingBits::solve(0));
        $this->assertEquals(1, CountingBits::solve(4));
        $this->assertEquals(3, CountingBits::solve(7));
        $this->assertEquals(2, CountingBits::solve(9));
        $this->assertEquals(2, CountingBits::solve(10));
        $this->assertEquals(4, CountingBits::solve(15));
        $this->assertEquals(5, CountingBits::solve(1234));
    }
}
