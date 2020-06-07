<?php 

$link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'crud_app');

if (!$link) {

    echo "Error" . mysqli_connect_errno() . "<br>" . mysqli_connect_error();
}

if(isset($_GET['id'])){

    $id=$_GET['id'];
    $sql="DELETE FROM users WHERE id =$id";
    $result=mysqli_query($link,$sql);
    header("Location: index.php");

}