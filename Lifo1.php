<?php
require_once 'Lifo2.php';
class Lifo1 implements Lifo2
{
    protected $items;


    public function __construct()
    {
        $this->items = array();


    }

    public function push($item)
    {


        $this->items[]=$item;


    }

    public function pop()
    {
        return array_pop($this->items); 
    }
}
$l = new L1();
$l->push('1');
$l->push('2');
$l->push('3');
$l->push('4');
$l->pop(); 
print_r($l);
