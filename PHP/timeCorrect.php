<?php
require __DIR__ . '/common.php';

// A new task for you!

// You have to create a method, that corrects a given time string. There was a problem in addition, so many of the time strings are broken. Time-Format is european. So from "00:00:00" to "23:59:59". 

// Some examples:

// "09:10:01" -> "09:10:01"
// "11:70:10" -> "12:10:10"
// "19:99:99" -> "20:40:39"
// "24:01:01" -> "00:01:01"

// If the input-string is null or empty return exactly this value! (empty string for C++)
// If the time-string-format is invalid, return null. (empty string for C++)

// Have fun coding it and please don't forget to vote and rank this kata! :-)

// I have created other katas. Have a look if you like coding and challenges.

function timeCorrect($timestring)
{
    if (empty($timestring)) {
  		return $timestring;
    }
    if (!preg_match('/^\d{2}\:\d{2}\:\d{2}$/', $timestring)) {
      return null;
    }
    list($hour, $minute, $second) = explode(':', $timestring);
    $time = $hour*3600 + $minute*60 + $second;
    return date('H:i:s', $time);
}

// dd(timeCorrect('99:99:99''));
dd(timeCorrect('99;99:99''));