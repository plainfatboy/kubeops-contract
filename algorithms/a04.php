<?php

function fibonacciNumber(int $n) : int {
    if ($n == 0) return 0;

    if ($n == 1) return 1;

    return fibonacciNumber($n - 1) + fibonacciNumber($n - 2);
}

echo fibonacciNumber(6);

echo PHP_EOL;