<?php

require __DIR__ . '/common.php';

function partlist(array $arr)
{
    $result = [];
    $length = count($arr);
    for ($i = 0; $i < $length - 1; ++$i) {
        $start = array_slice($arr, 0, $i + 1);
        $end = array_slice($arr, $i + 1);
        $result[] = [implode($start, ' '), implode($end, ' ')];
    }

    return $result;
}

dd(partlist(['az', 'toto', 'picaro', 'zone', 'kiwi']));
