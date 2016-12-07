<?php

require __DIR__ . '/common.php';

/*
The Vigenère cipher is a classic cipher originally developed by Italian cryptographer Giovan Battista Bellaso and published in 1553. It is named after a later French cryptographer Blaise de Vigenère, who had developed a stronger autokey cipher (a cipher that incorporates the message of the text into the key).

The cipher is easy to understand and implement, but survived three centuries of attempts to break it, earning it the nickname "le chiffre indéchiffrable" or "the indecipherable cipher."

From Wikipedia:

The Vigenère cipher is a method of encrypting alphabetic text by using a series of different Caesar ciphers based on the letters of a keyword. It is a simple form of polyalphabetic substitution.
(...)

In a Caesar cipher, each letter of the alphabet is shifted along some number of places; for example, in a Caesar cipher of shift 3, A would become D, B would become E, Y would become B and so on. The Vigenère cipher consists of several Caesar ciphers in sequence with different shift values.
Assume the key is repeated for the length of the text, character by character. Note that some implementations repeat the key over characters only if they are part of the alphabet, and that is not the case here.

The shift is derived by applying a Caesar shift to a character with the corresponding index of the key in the alphabet.

Visual representation (suggested by OverZealous)

message: my secret code i want to secure
key:     passwordpasswordpasswordpasswor
Write a class that, when given a key and an alphabet, can be used to encode and decode from the cipher.

E.g.

var alphabet = 'abcdefghijklmnopqrstuvwxyz';
var key = 'password';

// creates a cipher helper with each letter substituted
// by the corresponding character in the key
var c = new VigenèreCipher(key, alphabet);

c.encode('codewars'); // returns 'rovwsoiv'
c.decode('laxxhsj'); // returns 'waffles'
Any character not in the alphabet must be left alone.

E.g. (following from above)

c.encode('CODEWARS'); // returns 'CODEWARS'
NOTE: The Python implementation presently requires Unicode conversion, i.e. input.decode('utf-8'), output.encode('utf-8').
*/

class VigenèreCipher
{
    public $alphabet;
    public $key;

    public function __construct($key, $alphabet)
    {
        $this->key = $key;
        $this->alphabet = str_split($alphabet);
    }

    public function encode($message)
    {
        return $this->cipher($message, 'encode');
    }

    public function decode($message)
    {
        return $this->cipher($message, 'decode');
    }

    public function cipher($message, $dir)
    {
        $message = str_split($message);
        $alphabet = $this->alphabet;
        $key = str_split(str_pad($this->key, count($message), $this->key));
        $result = '';
        for ($i = 0, $count = count($message); $i < $count; $i++) {
            $in = array_search($message[$i], $alphabet);
            if (false !== $in) {
                $ci = array_search($key[$i], $alphabet);
                $sum = ('encode' == $dir) ? $in + $ci : $in - $ci;
                $sum = ($sum < 0) ? count($alphabet) + $sum : $sum;
                $sum = ($sum >= count($alphabet)) ? $sum - count($alphabet) : $sum;
                $result .= $alphabet[$sum];
            } else {
                $result .= $message[$i];
            }
        }
        return $result;
    }
}

$alphabet = 'abcdefghijklmnopqrstuvwxyz';
$secret = 'pa';

$VigenèreCipher = new VigenèreCipher($secret, $alphabet);
dd($VigenèreCipher->encode('hello'));