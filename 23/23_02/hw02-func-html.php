<?php

$form_submited = True;

$months = array(
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
);


function options($month_names)
{

    echo "<option value='$month_names'>" . strtoupper($month_names) . "</option>";
}

if (isset($_POST['months'])) {
    $selectd_month = $_POST['months'];
    $form_submited = False;

    echo "<h1>Days in a month:</h1>";
    echo "The month of " . $selectd_month . " has " . $months[$selectd_month] . " days.";
}


?>

<?php if ($form_submited) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homework23_02</title>
    </head>

    <body>
        <h1>Days in a month:</h1>
        <form action="" method="post">

            <select name="months">
                <?php
                foreach ($months as $key => $value) {
                    options($key);
                }
                ?>
            </select>

            <button type="submit">Go</button>

        </form>


    </body>

    </html>

<?php } ?>