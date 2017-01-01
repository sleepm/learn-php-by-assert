<pre>
<?php

$array1 = array_pad([], 100, "a");
print_r($array1);
$a = [];
for($i=97;$i<123;$i++){
    array_push($a, chr($i));
}
$z = [];
for($i=26;$i--;){
    array_push($z, $a[$i]);
}
$A = [];
for($i=65;$i<91;$i++){
    array_push($A, chr($i));
}
$a1 = array_flip($a);
$a2 = array_change_key_case($a1, CASE_UPPER);
$A1 = array_flip($A);
assert($A1===$a2);
list($ag, $hn, $ou, $vz) = array_chunk($a,7);
print_r($ag);
print_r($hn);
print_r($ou);
print_r($vz);
print_r(array_chunk($a,7));