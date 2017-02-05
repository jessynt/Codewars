<?php
require __DIR__ . '/common.php';

function mxdiflg(array $a1, array $a2)
{
    // your code
    if (empty($a1) || empty($a2)) {
        return -1;
    }
    $a1lens = array_map(function ($item) {
        return strlen($item);
    }, $a1);
    $a2lens = array_map(function ($item) {
        return strlen($item);
    }, $a2);
    return max(max($a2lens) - min($a1lens), max($a1lens) - min($a2lens));
}

$s1 = ['hoqq', 'bbllkw', 'oox', 'ejjuyyy', 'plmiis', 'xxxzgpsssa', 'xxwwkktt', 'znnnnfqknaz', 'qqquuhii', 'dvvvwz'];
$s2 = ['cccooommaaqqoxii', 'gggqaffhhh', 'tttoowwwmmww'];

dd(mxdiflg($s1, $s2));