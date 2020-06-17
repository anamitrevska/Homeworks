<?php

include "ASelect.php";
include "BoostrapSelect.class.php";
include "HtmlSelect.class.php";

// use namespace
use anamitrevska\Select\HtmlSelect;
use anamitrevska\Select\BoostrapSelect;
 
$browsers= [
     "None",
     "Firefox",
     "Chrome",
     "Internet Explorer",
     "Safari",
     "Opera",
     "Other"
  ];
 $htmlSelect = new HtmlSelect();
 $htmlSelect->setName('browserWork');
 $htmlSelect->setValue($browsers);
 echo "HTML: ";
 $htmlSelect->makeSelect($browsers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


  <p>  BOOTSTRAP select: </p>
<?php 
$browsers= [
     "None",
     "Firefox",
     "Chrome",
     "Internet Explorer",
     "Safari",
     "Opera",
     "Other"
  ];
 $bootstrapSelect = new BoostrapSelect();
 $bootstrapSelect->setName('browserWork');
 $bootstrapSelect->setValue($browsers);
 // that will create select
 $bootstrapSelect->makeSelect($browsers);
?>



    
</body>
</html>
