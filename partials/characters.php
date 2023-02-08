<?php $numbers = range('0', '9');
$capital_letters = range('A', 'Z');
$letters = range('a', 'z');
$symbols = array_merge(range(chr(33), chr(47)), range(chr(58), chr(64)), range(chr(91), chr(96)), range(chr(123), chr(126)));

$merged_characters = array_merge($numbers, $capital_letters, $letters, $symbols);
