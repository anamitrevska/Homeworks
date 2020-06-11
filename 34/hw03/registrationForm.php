<?php 
 $browsertypes =['Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other'];
include 'Select.php';
 
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>
 
<form method="post" action="regUser.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php

$select =new Select ();

$select -> setName('browser');
$select -> setVallue($browsertypes);
 
$select ->makeSelect();
 
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
 
    //Could include code to send data to database here.
    //Retrieve user responses.
 
    //The following variable has an altered name to avoid confusion.
 
    //Confirm responses to user.
 
?>
 </body>
 </html>
 