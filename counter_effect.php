<?php
require __DIR__ . '/common.php';

function counter_effect($hit_count)
{
    // Your code here
    $numbers = str_split($hit_count);
    foreach ($numbers as $key => $number) {
        $numbers[$key] = range(0, $numbers[$key]);
    }
    return $numbers;
}

dd(counter_effect('1250'));