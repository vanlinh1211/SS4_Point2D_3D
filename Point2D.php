<?php

class Point2D
{
    public $x;
    public $y;
public function __construct($x, $y)
{
    $this->x= $x;
    $this->y= $y;
}

    function getX()
    {
        return $this->x;
    }

    function getY()
    {
        return $this->y;
    }

    function setX($x)
    {
        $this->x = $x;
    }

    function setY($y)
    {
        $this->y = $y;
    }

    function getXY()
    {
        $array = [$this->x, $this->y];
        return $array;
    }

    function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function toString()
    {
        print_r($this->getXY());
    }
}
