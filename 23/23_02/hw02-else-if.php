<?php
$form_submited=True;
$heading="";
$display_text="";
    if(!empty($_POST['day_input'])){

        $heading="<h1>Days of the Week</h1>";

        if(strtolower(trim($_POST['day_input']))==="monday"){

            $display_text="<p>Laugh on Monday, laugh for danger.</p>";

        } elseif(strtolower(trim($_POST['day_input']))==="tuesday"){

            $display_text="<p>Laugh on Tuesday, kiss a stranger.</p>";

        }elseif(strtolower(trim($_POST['day_input']))==="wednesday"){

            $display_text="<p>Laugh on Wednesday, laugh for a letter.</p>";

        } elseif(strtolower(trim($_POST['day_input']))==="thursday"){

            $display_text="<p>Laugh on Thursday, something better.</p>";

        }elseif(strtolower(trim($_POST['day_input']))==="friday"){

            $display_text="<p>Laugh on Friday, laugh for sorrow.</p>";

        }elseif(strtolower(trim($_POST['day_input']))==="saturday"){

            $display_text="<p>Laugh on Saturday, joy tomorrow.</p>";

        } else {

            $display_text="<p>Pick another day";

        }

        $form_submited=False;

    }

    echo $heading;
    echo $display_text;

    if($form_submited){

        echo '<!DOCTYPE html>
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
                <input type="text" name="day_input">
                <button type="submit" name="submit" >GO</button>
            </form>
            </body>
        </html>';


    }
