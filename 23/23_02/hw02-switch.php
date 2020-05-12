<?php
$form_submited=True;
$heading="";
$display_text="";
$button="";
    if(isset($_POST['days_of_week'])){
        $heading="<h1>Pick a day:</h1>";
        switch($_POST['days_of_week']){

            case "Monday":
                 $display_text="<p>Laugh on Monday, laugh for danger.</p>";
            break;

            case "Tuesday":
                $display_text="<p>Laugh on Tuesday, kiss a stranger.</p>";
            break;

            case "Wednesday":
                $display_text="<p>Laugh on Wednesday, laugh for a letter.</p>";
            break;
            case "Thursday":
                $display_text="<p>Laugh on Thursday, something better.</p>";
            break;
            case "Friday":
                $display_text="<p>Laugh on Friday, laugh for sorrow.</p>";
            break;
            case "Saturday":
                $display_text="<p>Laugh on Saturday, joy tomorrow.</p>";
            break;
            default:
                $display_text="<p>Pick another day!!</p>"

         }
         $form_submited=False;
         $button='<button type="submit" name="back_btn" onclick="history.back()">Go Back</button';
    }

    echo $heading;
    echo $display_text;
    echo $button;

    if($form_submited){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework23_02</title>
</head>
<body>
    <h1>Days of the week</h1>
    <form action="" method="post">

        <p>Please enter day of the week:</p>
        <select name="days_of_week">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>

        </select>
        <button type="submit" name="submit" >GO</button>
    </form>
  

<?php
}
 ?>   



</body>
</html>
