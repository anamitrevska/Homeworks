<?php
// no need to start session again - results.php is part of index.php and you started session there

// check if session variable 'quiz' exist

// Inside IF statement :
// read answers.ini file with parse_ini_file() function
// Create $results array. In foreach loop add to this array 
// 1) question id in form "q1","q2"... ,  user answers from $_SESSION variable and correct answers in 
// 2) user answer from $_SESSION variable
// 3)  correct answer for this question from answers.ini file ( you readed in with parse_ini_file())

//Below in <tbody> with foreach output $results array as table row for each question

// destroy session to flush the results

$correct_answers = "";
$user_answers = "";
$bg = "";
if (!empty($_SESSION["quiz"])) {

  $correct_answers = parse_ini_file("answers.ini");
  $user_answers = $_SESSION["quiz"];
}


function create_answers($array1, $array2)
{
  foreach ($array1 as $key => $value) {
    if ($array1[$key] === $array2[$key]) {
      $bg = "bg-success";
    } else {

      $bg = "bg-danger";

    }
    echo "<tr class=" . $bg . ">";
    echo "<th>" . $key . "</th>";
    echo "<th>" . $array2[$key] . "</th>";
    echo "<th>" . $array1[$key] . "</th>";
    echo "</tr>";
  }
}

  session_destroy();

?>

<h4 style="text-align: center"> Your is: </h4>
<table class="table">
  <thead>
    <tr>
      <th>Question</th>
      <th>Your answer</th>
      <th>Correct answer</th>
    </tr>
  </thead>
  <tbody>
  <?php
    create_answers($correct_answers, $user_answers);
    // var_dump($correct_answers);
    // var_dump($user_answers);
  ?>
  </tbody>
</table>