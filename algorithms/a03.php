<?php

function balance (array $ledger) : array {
    $amounts = array_values($ledger);

    $avg = array_sum($amounts) / count($amounts);

    return array_map(fn($val): float => number_format($val - $avg, 2), $ledger);
}

print_r(balance([
    "Jennie" => 11.5,
    "Rose" => 99.645,
    "Jisoo" => 30.64,
    "Lisa" => 0
]));