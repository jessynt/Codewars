<?php
require __DIR__ . '/common.php';

function getMiddle($text)
{
    $length = strlen($text);
    if ($length % 2 === 0) {
        return substr($text, $length / 2 - 1, 2);
    }
    return substr($text, $length / 2, 1);
}

dd(getMiddle('tet'));