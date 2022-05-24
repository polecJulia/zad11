<?php

interface Fifo2
{
    public function enqueue($item);
    public function dequeue();

}