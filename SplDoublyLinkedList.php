<?php
echo "<pre>";
$sll = new SplDoublyLinkedList();

$sll->push(1);
$sll->push(2);
$sll->push(3);
$sll->push(4);
$sll->add(4,5);
$sll->rewind();
print_r($sll);
assert($sll->count()===5);
assert($sll->bottom()===1);
assert($sll->top()===5);
assert($sll->pop()===5);
assert($sll->shift()===1);
$sll->offsetUnset(1);
$sll->offsetSet(1,3);
assert($sll->offsetGet(1)===3);
assert($sll->offsetExists(2)===false);
print_r($sll);
$str="";
//assert($sll->push(4));
while($sll->valid()){
    $str .= $sll->current();
    $sll->next();
}
assert($str==="23");
print_r($sll);
$sll->push(4);$sll->push(4);$sll->push(4);$sll->push(4);$sll->push(4);$sll->push(4);$sll->push(4);$sll->push(4);
echo $sll->serialize();
$sll->unserialize($sll->serialize());
print_r($sll);
$sll->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
print_r($sll->getIteratorMode());
print_r($sll);