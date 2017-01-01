<?php
error_reporting(E_ALL);
define("CON1","A");
const A = "A";
assert(defined("CON1"));
assert(CON1===A);

assert(__LINE__===8);
