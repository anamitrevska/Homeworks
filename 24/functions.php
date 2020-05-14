<?php

$form_submited = true;

define('MONTHS', array(
    "January" => 31,
    "February" => '28 days, if leap year 29',
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
));

// var_dump(MONTHS);

function options($month_names)
{

    echo "<option value='$month_names'>" . strtoupper($month_names) . "</option>";
}

if (isset($_POST['months'])) {
    $selectd_month = $_POST['months'];
    $form_submited = false;

    echo "<h1>Days in a month:</h1>";
    echo "The month of " . $selectd_month . " has " . MONTHS[$selectd_month] . " days.";
}



function makeSelect()
{

    if (!is_array(MONTHS)) {

        echo "Error message: Nor an array";
        die();
    }

    echo '<select name="months">';
    foreach (MONTHS as $key => $value) {
        options($key);
    }

    echo ' </select>';
}


?>