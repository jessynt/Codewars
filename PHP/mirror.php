<?php
require __DIR__ . '/common.php';

function vertMirror($s)
{
    $arr = explode("\n", $s);
    return implode("\n",
        array_map(function ($item) {
            return strrev($item);
        }, $arr));
}

function horMirror($s)
{
    $arr = explode("\n", $s);
    return implode("\n", array_reverse($arr));
}

function oper($fct, $s)
{
    return $fct($s);
}
dd(oper('horMirror', 'hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu'));