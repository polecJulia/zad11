<?php 
require_once 'Fifo2.php';
class Fifo1 implements Fifo2
{
    protected $items;


    public function __construct()
    {
        $this->items = array();


    }

    public function enqueue($item)
    {

        array_unshift($this->items, $item); 


    }

    public function dequeue()
    {
        return array_pop($this->items); 
    }
}
$f= new Fifo1();
$f->enqueue('1');
$f->enqueue('2');
$f->enqueue('3');
$f->enqueue('4');
$f->dequeue(); 
print_r($f);