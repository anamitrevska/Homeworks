<?php

$navItems = [
    'index.php?page=home' => 'Home',
    'index.php?page=about' => 'About',
    'index.php?page=contact' => 'Contact',
    'index.php?page=login' => 'Login'
];


 function create_navbar($array){

    foreach($array as $key =>$value){

        echo '<li class="nav-item">';
        echo '<a class="nav-link active" href="'.$key.'">'.$value.'</a>';
        echo '</li>';
    }

 }


?>




<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="#">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav ml-auto">
           <?php create_navbar($navItems); ?>
            </ul>
        </div>
    </nav>