<?php
error_reporting(E_ALL);
$array0 = array(0,1,2,3,4,5);
$array1 = [0,1,2,3,4,5];
$int1 = 1;
assert($array0===$array1);
assert($int1===$array1[1]);
assert($int1===$array1["1"]);

list( , $one, $two, , $four) = $array0;
assert($one===1);
assert($two===2);
assert($four===4);

$array2 = array(
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    "5" => 5
    );
$array3 = [
    "0" => 0,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5
    ];
assert($array1===$array2);
assert($array2===$array3);

$array4 = [
    0 => 0,
    1 => 1,
    1.0 => 2,
    true => false
    ];
$array5 = [0,false];
assert($array4===$array5);

$array6 = [
    1,
    2,
    4 => 3
    ];
$array7 = [];
$array7[0] = 1;
$array7[1] = 2;
$array7[4] = 3;
assert($array6===$array7);

$array8 = [
    "foo" => "bar",
    "bar" => "foo",
    2 => 1
    ];
$array9 =[];
$array9['foo'] = "bar";
$array9["bar"] = 'foo';
$array9[2] = 1;
assert($array8===$array9);
