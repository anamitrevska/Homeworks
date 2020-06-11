<?php
if(empty($_POST['name']) && empty($_POST['username']) && empty($_POST['email']) && empty($_POST['browser'])){
   header('Location: registrationForm.php');
    exit();
}
// var_dump($_POST);

$link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'hw_34'); // could work also without port 
if (!$link) {
    echo "ERROR: "
        . mysqli_connect_errno() . "<br>"
        . mysqli_connect_error();
}

    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $browser=$_POST['browser'];

    $sql="INSERT INTO reg_user (name,username,email,browser) VALUES ('$name','$username','$email','$browser')";

    $result=mysqli_query($link,$sql);

    if($result){

        echo '<h2>Your registration was successfull!!</h2>';

    }