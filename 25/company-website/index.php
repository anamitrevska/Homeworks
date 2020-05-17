<?php
 if (isset($_GET['page'])) {
$title_name='Bootstrap | ' .ucfirst($_GET['page']);
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title><?php echo $title_name;?></title>
    <style>
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php include 'include/navigation.inc.php'; ?>
    
    <!-- Content Start -->

    <?php

    if (isset($_GET['page'])) {

        switch ($_GET['page']) {

            case 'home':
                include 'include/index.cont.php';
                $setfooter = true;
                break;

            case 'about':
                include 'include/about.cont.php';
                $setfooter = true;
                break;
            case 'contact':
                include 'include/contact.cont.php';
                $setfooter = false;
                break;

            case 'login':
                include 'include/login.cont.php';
                $setfooter = false;
                break;

            default:
            include 'include/index.cont.php';
            $title_name='BootsApp | Home';
            $setfooter = true;
        }
    }

    if ($setfooter) {

        include 'include/footer.inc.php';
    }
    ?>

</body>

</html>