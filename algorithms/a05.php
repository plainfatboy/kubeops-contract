<?php

//Tested on PHP 7.4.3

function palindrome (string $string) : bool {
    return (strrev($string) == $string) ? true : false;
}

var_dump(palindrome("racecar"));
var_dump(palindrome("ironman"));