<?php
$display_form = True;
$display_warning = "";
if (!empty($_POST['city']) && !empty($_POST['month']) && !empty($_POST['city']) && isset($_POST['weather'])) {

    $display_form = False;
    $experienced_weather = $_POST['weather'];
    // var_dump($experienced_weather);

    echo "<h1>How's your weather?</h1>";
    echo "<h2>With function</h2>";
    echo "In " .ucfirst(trim($_POST['city']))." in the month of ".ucfirst(trim($_POST['month'])). " " . ucfirst(trim($_POST['year'])) . ", you observed the folowing weather:";

    create_list($experienced_weather);

} else {

    $display_warning = "Please fill all fields.";
}


function create_list($array)
{

    echo "<ul>";

    foreach ($array as $value) {

        echo "<li>".ucfirst($value)."</li>";

    }

    echo "</ul>";
}



?>

<?php if($display_form) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework23_02</title>
</head>

<body>

    <h1>How's your weather?</h1>
    <h2>With function</h2>

    <form action="" method="post">
        <p>Please enter your information:</p>
        <label for="city">City:</label>
        <input type="text" name="city">
        <label for="month">Month:</label>
        <input type="text" name="month">
        <label for="year">Year:</label>
        <input type="text" name="year">

        <?php echo $display_warning; ?>

        <p>Please choose the kind of weather you experienced from the list below.</p>
        <p>Choose all that apply</p>
        <input type="checkbox" value="sunshine" name="weather[]">
        <label for="sunshine"> Sunshine</label><br>

        <input type="checkbox" value="clouds" name="weather[]">
        <label for="vehicle1"> Clouds</label><br>

        <input type="checkbox" value="rain" name="weather[]">
        <label for="rain"> Rain</label><br>

        <input type="checkbox" value="hail" name="weather[]">
        <label for="hail"> Hail</label><br>

        <input type="checkbox" value="sleet" name="weather[]">
        <label for="sleet"> Sleet</label><br>

        <input type="checkbox" value="snow" name="weather[]">
        <label for="snow"> Snow</label><br>

        <input type="checkbox" value="wind" name="weather[]">
        <label for="wind"> Wind</label><br>

        <input type="checkbox" value="cold" name="weather[]">
        <label for="cold"> Cold</label><br>

        <input type="checkbox" value="heat" name="weather[]">
        <label for="heat"> Heat</label><br>

        <button type="submit">GO</button>

    </form>



</body>

</html>


<?php } ?>