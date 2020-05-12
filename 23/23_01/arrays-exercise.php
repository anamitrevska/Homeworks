<?php

echo "Exercise 1<br>";
$array1 = array( 0, 1, 2, 3, 4 );
echo $array1[3]."<br>";


echo "<br>Exercise 2<br>";
$array2 = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $array2['three']."<br>";


echo "<br>Exercise 3<br>";
$array3 = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);

echo $array3[1][1][0] ."<br>";


echo "<br>Exercise 4<br>";
$array4 = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);

echo $array4['b']['o']['b']."<br>";


echo "<br>Exercise 5<br>";
$str5 = "a,b,c,d,e,f";
$array5=explode(",", $str5);
var_dump($array5);


echo "<br>Exercise 6<br>";
foreach($array5 as $value){
    $array6[$value]=$value;
}
var_dump($array6);


echo "<br>Exercise 7<br>";
$keys7 = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values7 = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$array7_keys7=array();
$array7_values7=array();
foreach($keys7 as $value){
    array_push($array7_keys7,$value);
}

foreach($values7 as $value){
    array_push($array7_values7,$value);
}
$keysAndValues=array_combine($array7_keys7,$array7_values7);
var_dump($keysAndValues);



echo "<br>Exercise 8<br>";
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

for($i=0; $i<count($transactions); $i++){

    $amount=abs($transactions[$i]['debit']-$transactions[$i]['credit']);

    $transactions[$i]["amount"] = $amount;

}
var_dump($transactions);


echo "<br>Exercise 9<br>";

$array9 = array( 0, 1, 2, 3, 4, 5, 6 );
$sum=0;
foreach($array9 as $value){

    $sum+=$value;

}
var_dump($sum);
?>