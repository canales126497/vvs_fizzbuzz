<?php

namespace Deg540\PHPTestingBoilerplate;

include "Calculator.php";

use PhpParser\Node\Scalar\String_;

class FizzBuzz{
    function fizzbuzz($n):String
    {
        $calculadora = new Calculator();
        $fizz = $calculadora->module($n, 3);
        $buzz = $calculadora->module($n, 5);

        if($fizz == 0 AND $buzz == 0)
            return "FIZZBUZZ!!!";
        elseif($fizz == 0)
            return "FIZZ";
        elseif($buzz == 0)
            return "BUZZ";
        else
            return (string)$n;
    }
}