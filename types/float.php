<?php
error_reporting(E_ALL);
$float1 = 1.234567;
$float2 = 1.2345678;
$epsilon = 0.00001;
assert(($float2-$float1<$epsilon));
assert(is_nan(NAN));
var_dump($float2-$float1==((float)0.9));
assert(($float2-$float1==0.9)===true);