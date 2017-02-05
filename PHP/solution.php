<?php
require __DIR__ . '/common.php';


/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.

Note: If the number is a multiple of both 3 and 5, only count it once.
Courtesy of ProjectEuler.net
*/

function solution($number)
{
    $sum = array_filter(range(0, $number - 1), function ($item) {
        if ($item % 3 == 0 || $item % 5 == 0) {
            return $item;
        }
    });
    return array_sum($sum);
}

// must be 23
dd(solution(10));