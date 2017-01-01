<?php
error_reporting(E_ALL);

$变量1 = "就是这么任性";
$var1 = "就是这么任性";
assert($var1===$变量1);

$变量1 = $var1;
$变量1 = "am i wrong?";
assert($var1!==$变量1);

$变量1 = &$var1;
$变量1 = "i hope kill any bug";
assert($变量1===$var1);

$boolenTrue = true;
$boolenFalse = false;
if("1"){
    assert(true);
}else{
    assert(false);
}
assert($boolenFalse==0);
assert($boolenFalse!=1);
assert(($boolenTrue===1)===false);

$int1 = 1;
$float1 = 1.0;
assert($int1==$float1);
assert($int1!==$float1);
assert($int1==true);
assert($float1==true);
assert(true==$float1);

$str1 = "1";
assert($str1==$int1);
assert($str1==$float1);
assert(true==$str1);

$empty_array = [];
assert($empty_array===(array()));
assert(false==$empty_array);

define("ONE", 1);
assert(ONE===1);
assert(ONE!==true);

function test(){
    global $int1;
    $var = 1;
    assert($int1===$var);
}
test();
assert(isset($var)===false);
$int1++;
assert($int1===2);
++$int1;
assert($int1===3);

$sentence = ["i", "love", "php", "!"];
$temp = "";
for($i=0,$count=count($sentence);$i<$count;$i++){
    $temp .= $sentence[$i];
}
assert($temp==="ilovephp!");
for($count=count($sentence);$count--;){
    $temp .= $sentence[$count];
}
assert($temp==="ilovephp!!phplovei");