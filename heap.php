<?php
echo "<pre>";
class s extends SplHeap{
    function compare($a,$b){
        return $b-$a;
    }
}
$h = new splminheap;
$h->insert(10);
$h->insert(5);
$h->insert(23);
$h->insert(2);
print_r($h);