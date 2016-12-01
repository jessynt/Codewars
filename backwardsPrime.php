<?php
require __DIR__ . '/common.php';

function is_prime($num)
{
    for ($i = 2; $i <= floor(sqrt($num)); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function backwardsPrime($start, $stop)
{
    // Your code here
    $arr = array_filter(range($start, $stop), function ($item) {
        return ($item != strrev($item)) && is_prime($item) && is_prime(strrev($item));
    });

    return array_values($arr);
}

$a = [70001, 70009, 70061, 70079, 70121, 70141, 70163, 70241];;
dd(backwardsPrime(70000, 70245));
