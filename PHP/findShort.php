<?php
require __DIR__ . '/common.php';
function findShort($str)
{
    return min(array_map(function ($item) {
        return strlen($item);
    }, explode(' ', $str)));
}

dd(findShort('bitcoin take over the world maybe who knows perhaps'));