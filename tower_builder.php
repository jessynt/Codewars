<?php
require __DIR__ . '/common.php';
function tower_builder(int $n): array
{
    $pad = $n * 2 - 1;
    $x = 1;

    $arr = [];
    while ($n --> 0) {
        $arr[] = str_pad(str_repeat('*', $x), $pad, ' ', STR_PAD_BOTH);
        $x += 2;
    }

    return $arr;
}

dd(tower_builder(4));