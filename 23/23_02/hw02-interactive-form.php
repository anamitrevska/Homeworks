<?php
echo '<h1>Favourite City !</h1>';
if(!empty($_POST['city'])){

    echo "Your favourite city is: " .trim($_POST['city']);

} else{

    echo "Please enter city";
}

?>