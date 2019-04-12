<?php

include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(3,4);
echo $point2D->toString();

$point3D = new Point3D(1, 2, 3);
echo $point3D->toString();