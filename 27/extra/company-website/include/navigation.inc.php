<?php

$navItems = [
    'index.php?page=home' => 'Home',
    'index.php?page=about' => 'About',
    'index.php?page=contact' => 'Contact',
    'index.php?page=login' => 'Login' ,
    'index.php?page=register' => 'Register'
];

if (isset($_COOKIE['username'])) {
    unset($navItems["index.php?page=login"]);
    unset($navItems["index.php?page=register"]);
}

function create_navbar($array)
{

    foreach ($array as $key => $value) {

        echo '<li class="nav-item">';
        echo '<a class="nav-link active" href="' . $key . '">' . $value . '</a>';
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
            <?php create_navbar($navItems);
            if (isset($_COOKIE['username'])) {

                echo '<li class="nav-item">';
                echo '<div class="dropdown show"><a class="nav-link active" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i><span class="p-2">' . $_COOKIE['username'] . '</span></a> ';
                echo ' <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="index.php?page=logout">Logout</a>
          </div> </div>';
                echo '</li>';
                
            }
            ?>
        </ul>
    </div>
</nav>