<?php
echo "<pre>";
$a = [
    "a"=>"aaa",
    "v"=>"vvvvv"
    ];
$o = new ArrayObject($a);
foreach($o as $value){
    echo $value."\n";
}
$c= $o->getIterator();
while($c->valid()){
    echo $c->current();
    $c->next();
}
$ol = new arrayiterator($a);

var_dump($ol);