<?php
error_reporting(E_ALL);

settype($varA, "null");
$varB = 1;
unset($varB);
$varC = null;

assert(is_null($varA)===true);
assert(is_null($varB)===true);
assert(is_null($varC)===true);
