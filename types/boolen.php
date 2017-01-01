<?php
error_reporting(E_ALL);
$boolenTrue = true;
$boolenFalse = false;
$tempBoolen = true;
$int1 = 1;
$float1 = 1.0;
$str1 = "1";
$empty_array = [];
define("ONE", 1);

assert($boolenFalse==0);
assert($boolenFalse!=1);
assert(($boolenTrue===1)===false);

assert($float1==true);
assert(true==$float1);

assert(true==$str1);

assert(false==$empty_array);

assert(ONE===1);
assert(ONE!==true);


if("1"){
    assert(true);
}else{
    assert(false);
}

while($tempBoolen){
    assert(1);
    $tempBoolen = 0;
}
if($boolenTrue){
    assert(1);
}
if(-001){
    assert(true);
}