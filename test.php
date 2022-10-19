<?php
include_once "./Car.php";

$c1 = new Car("TOYOTA", 3.5);

echo $c1->__toString();
$c1->displayWeight();