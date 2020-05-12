<?php echo "Exercise 1<br>" ?>
&copy; <?php echo date("Y") . " PHP Exercises - CodeAcademy<br> " ?>



<?php echo "<br>Exercise 2<br>";

$mybirthday = mktime(0, 0, 0, 9, 14, 2020);
$mytime = time();
$days_till_birthday = ($mybirthday - $mytime) / 60 / 60 / 24;
echo "I have " . floor($days_till_birthday) . " days till my birthday!!!<br>";

echo "<br>Exercise 3<br>";

$date = date_create("2020-09-01");
$date_format1 = date_format($date, "Y/m/d");
$date_format2 = date_format($date, "y.m.d");
$date_format3 = date_format($date, "d-m-y");
echo $date_format1 . "<br>";
echo $date_format2 . "<br>";
echo $date_format3 . "<br>";

echo "<br>Exercise 4 <br>";

$date1 = date_create("1981-11-04");
$date2 = date_create("2013-09-05");

$diff = date_diff($date2, $date1);

echo "The difference is: " . $diff->y . " years, " . $diff->m . " months and " . $diff->d . " days <br>";


echo "<br>Exercise 5<br>";

$sample_date = "2020-09-12";
$result_date = date("d-m-Y", strtotime($sample_date));
echo "Result date is :" . $result_date . "<br>";


echo "<br>Exercise 6<br>";

    $now_time=time();
    $some_date=strtotime("10 September 2000");

    $day_difference=floor(($now_time-$some_date)/86400);

    echo $day_difference ."<br>";


echo "<br>Exercise 7<br>";
    $dateString = '2020-02-04';
    $firstDateOfMonth = date("1-m-Y", strtotime($dateString));
    $lastDateOfMonth = date("t-m-Y", strtotime($dateString));

    echo "the first day is: " .$firstDateOfMonth ." and the last day is : " .$lastDateOfMonth . "<br>";

echo "<br>Exercise 8<br>";
    $dateString8 = '2020-02-04';
    $name_Day=date("l",strtotime($dateString8));
    $day_of_month=date("j",strtotime($dateString8));
    echo $name_Day ." the " .$day_of_month."th<br>";

echo "<br>Exercise 9<br>";
    $orgdate9="2020-09-07 10:30:00";
    $date9=strtotime($orgdate9);
    $hour=date("g:ia",$date9);
    $day9=date("j",$date9);
    $month9=date("F",$date9);
    echo $hour ." ".$day9."th of ".$month9;


echo "<p>Exercise 10<p>";

function convertTime($date10, $mer){
    $date = $date10 . "" . $mer;

    // var_dump($date);
    
    if ($mer === "AM") {
        echo date("Y-m-d h:i", strtotime($date)) . "<br>";               
    } else {
        echo date("Y-m-d H:i", strtotime($date)) . "<br>";               
    }
}
convertTime("2020-05-19 09:00:00", "AM");
convertTime("2020-05-19 09:00:00", "PM");


?>