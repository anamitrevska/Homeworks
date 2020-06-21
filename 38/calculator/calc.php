<?php
use calculate\Calc;
include 'includes/Calc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calc = $_POST['cal'];
// create (instanciate) Calc class with paramters $num1, $num2, $calc

$calculate= new Calc($calc,$num1,$num2);

// output result
 echo '<p> The output result is: ' .$calculate->calcMethod().'</p>';