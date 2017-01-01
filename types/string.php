<?php
error_reporting(E_ALL);
$str1 = "abcdefghijklmnopqrstuvwxyz";
$str2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$tempStr = 'str1';
$strMultiline = "a
b
c
d";

$strHeredoc1 = <<<HERE
$str1
HERE;

$strHeredoc2 = <<<"here"
$str1
here;

$strNowdoc = <<<'NOW'
$str1
NOW;

$strAline = "a\nb\nc\nd";

assert("$str1"===$str1);
assert($strMultiline===$strAline);
assert($strHeredoc1!==$strNowdoc);
assert($strHeredoc1===$strHeredoc2);
assert($strNowdoc==='$'.$tempStr);
assert($$tempStr===$str1);

$magic1 = "i'm a writer for code";
$magic2 = 'i\'m a writer for code';
assert($magic1===$magic2);

$str3 = "i need {$str1}";
$str4 = "i need ${str1}";
assert($str3===$str4);
assert("a"===$str1[0]);
$str1[0]="z";
assert("z"===$str1[0]);

assert(1+"1"===2);
assert(1+"a1"===1);
assert("1a"+1===2);
