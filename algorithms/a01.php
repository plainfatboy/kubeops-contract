<?php

function fizzBuzz (int $int) : string {
    return (($int%3 == 0) ? "Fizz" : "") . (($int%5 == 0) ? "Buzz" : "");
}

echo fizzBuzz(1);
echo PHP_EOL;

echo fizzBuzz(3);
echo PHP_EOL;

echo fizzBuzz(5);
echo PHP_EOL;

echo fizzBuzz(15);
echo PHP_EOL;

echo fizzBuzz(21);
echo PHP_EOL;

echo fizzBuzz(25);
echo PHP_EOL;

echo fizzBuzz(30);
echo PHP_EOL;