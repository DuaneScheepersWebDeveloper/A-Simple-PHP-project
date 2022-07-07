<?php

class Pen
{

    public $ink_color;

    function __construct($ink_color)
    {
        $this->ink_color;
    }

    public function togglePoint()
    {
    }
    public function write($message)
    {
        echo $message;
    }
}

class PenWithCap extends Pen
{

    public function toggleCap()
    {
    }
}
class RetractablePen extends Pen
{
    public function togglePoint()
    {
    }
    public function write($message)
    {
        return 'written with the retractable pen';
    }
}
$cappedPen = new PenWithCap('black');
$cappedPen->toggleCap();
$cappedPen->write('test');
$cappedPen->toggleCap();

$rectPen = new RetractablePen('blue');
$rectPen->togglePoint();
$rectPen->write('test2');
$rectPen->togglePoint();
