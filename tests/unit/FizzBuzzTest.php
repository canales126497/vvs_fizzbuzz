<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function isFizz()
    {
        $fb = new FizzBuzz();

        $result = $fb->fizzbuzz(6);

        $this->assertEquals("FIZZ", $result);
    }

    /**
     * @test
     */
    public function isBuzz()
    {
        $fb = new FizzBuzz();

        $result = $fb->fizzbuzz(10);

        $this->assertEquals("BUZZ", $result);
    }

    /**
     * @test
     */
    public function isFizzBuzz()
    {
        $fb = new FizzBuzz();

        $result = $fb->fizzbuzz(15);

        $this->assertEquals("FIZZBUZZ!!!", $result);
    }

    /**
     * @test
     */
    public function isNumber()
    {
        $fb = new FizzBuzz();

        $result = $fb->fizzbuzz(16);

        $this->assertEquals("16", $result);
    }
}
