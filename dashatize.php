<?php
require __DIR__ . '/common.php';


/*
Given a number, return a string with dash'-'marks before and after each odd integer, but do not begin or end the string with a dash mark.

Ex:
*/
function dashatize(int $num): string {
    // Replace with your code
    $str_arr  = str_split(abs($num));
    $string = '';
    foreach($str_arr as $key => $value){
            if($value %2 == 0){
                $string .= $value;
            }else {
                $string .= $key == 0? "$value-":"-$value-";
        }
    
    }
    return rtrim(preg_replace('/--/', '-', $string), '-');
}

dd(dashatize(5311));