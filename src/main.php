<?php

use Deg540\PHPTestingBoilerplate\FizzBuzz;

include "FizzBuzz.php";

$fb = new FizzBuzz();
$iters = 1000;

$i = 0;
while($i <= $iters) {
    echo $fb->fizzbuzz($i)."\n";
    $i = $i + 1;
}

?>