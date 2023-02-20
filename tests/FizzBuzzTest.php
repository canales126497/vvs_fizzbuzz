<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->fb = new FizzBuzz();
    }


    /**
     * @test
     */
    public function isFizz()
    {
        $result = $this->fb->fizzbuzz(6);

        $this->assertEquals("FIZZ", $result);
    }

    /**
     * @test
     */
    public function isBuzz()
    {
        $result = $this->fb->fizzbuzz(10);

        $this->assertEquals("BUZZ", $result);
    }

    /**
     * @test
     */
    public function isFizzBuzz()
    {
        $result = $this->fb->fizzbuzz(15);

        $this->assertEquals("FIZZBUZZ!!!", $result);
    }

    /**
     * @test
     */
    public function isNumber()
    {
        $result = $this->fb->fizzbuzz(16);

        $this->assertEquals("16", $result);
    }
}
