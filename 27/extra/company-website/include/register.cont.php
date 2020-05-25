<?php

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// $action="";
$msg = "";

function pass_confirm()
{

    $hash1 = md5($_POST['reg_pass']);
    $hash2 = md5($_POST['confirm_pass']);

    if ($hash1 === $hash2) {
        header("Location: index.php?page=about");
        exit();
    } else {

        echo "<script type='text/javascript'>alert('The passwords do not match');</script>";
    }
}


if (!empty($_POST['regUser']) && !empty($_POST['regEmail']) && !empty($_POST['reg_pass']) && !empty($_POST['confirm_pass'])) {
    pass_confirm();
}



?>



<div class="container" style="margin-top: 70px !important;">
    <div class="row">
        <div class="col-md-3 col-sm-12"></div>
        <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
            <div class="form">
                <div class="text-center py-4">
                    <i class="fas fa-user-circle fa-3x"></i></div>
                <h3 style="text-align: center" class="pb-4">REGISTER</h3>
                <form class="form-group" action="" method="POST">
                    <input type="text" class="form-control" placeholder="Enter username" name="regUser">
                    <br>
                    <input type="email" class="form-control" placeholder="Enter email" name="regEmail">
                    <br>
                    <input type="password" class="form-control" placeholder="Enter password" name="reg_pass">
                    <br>
                    <input type="password" class="form-control" placeholder="Confirm password" name="confirm_pass">
                    <br>
                    <?php if (!empty($msg))
                        echo  '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
                    ?>
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-sm-12"></div>
    </div>
</div>