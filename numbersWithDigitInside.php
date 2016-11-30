<?php
require __DIR__ . '/common.php';

function numbersWithDigitInside($x, $d)
{
    $solved = [];
    for ($i = 1; $i <= $x; $i++) {
        if (false !== strpos((string)$i, (string)$d)) {
            $solved[] = $i;
        }
    }
    if (empty($solved)) {
        return [0, 0, 0];
    }
    return [count($solved), array_sum($solved), array_product($solved)];
}

dd(numbersWithDigitInside(17, 6));