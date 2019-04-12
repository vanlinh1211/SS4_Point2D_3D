<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public $z;

    function getZ()
    {
        return $this->z;
    }

    function setZ($z)
    {
        $this->z = $z;
    }

    function getXYZ()
    {
        $array3D = [$this->x, $this->y, $this->z];
        return $array3D;
    }

    function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    function toString(){
        print_r($this->getXYZ());
    }
}
