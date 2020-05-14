<?php 

include 'functions.php';

if ($form_submited) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homework24_01</title>
    </head>

    <body>
        <h1>Days in a month:</h1>
        <form action="" method="post">
            <?php
            makeSelect();
            ?>
            <button type="submit">Go</button>

        </form>


    </body>

    </html>

<?php } ?>