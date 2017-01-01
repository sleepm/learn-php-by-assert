<?php
error_reporting(E_ALL);
$decimal9 = 9;
$bin9 = bindec(1001);
$octal9 = 011;
$hex9 = 0x9;
assert($bin9===$decimal9);
assert($octal9===$decimal9);
assert($hex9===$decimal9);
assert(is_int(PHP_INT_MAX)===true);
assert(is_float(PHP_INT_MAX+1)===true);