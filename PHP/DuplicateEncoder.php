<?php
require __DIR__ . '/common.php';
// The goal of this exercise is to convert a string to a new string where each character in the new string is '(' if that character appears only once in the original string, or ')' if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

// Examples:

// "din" => "((("

// "recede" => "()()()"

// "Success" => ")())())"

// "(( @" => "))(("
function duplicate_encode($word) 
{
    $chars = str_split(strtolower($word));
    $result = '';
    foreach ($chars as $key => $word) {
		$result .= count(array_keys($chars, $word)) === 1 ? '(' : ')';
    }
    return $result;
}

dd(duplicate_encode("dindon"));