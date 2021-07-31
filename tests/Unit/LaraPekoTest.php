<?php

namespace Ray247k\LaraPeko;

use PHPUnit\Framework\TestCase;

class LaraPekoTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function testClassInstance()
    {
        $this->assertInstanceOf(LaraPekoTest::class, new LaraPekoTest);
    }

    public function testGetAhoy()
    {
        $larapeko = new LaraPeko();
        $this->assertEquals('ahoy', $larapeko->getAhoy());
    }
}
