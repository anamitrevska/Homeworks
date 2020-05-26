<?php
// CSV Movie
// 1) read the csv file in $data array 

// 2) Remove first item from array

// 3) Check For form $_POST variables

// 4) craete empty $result array

// 5) Loop throught $data array with foreach and: 
//    - create an $studios array with Movie Companies (Lead Studio in the list) name from $data array
//    - create an array of movie Genre
//    - create an array of movie Year
//    - filter $data array according Selects from POST and put filtered items in empty $result array

// 6) Output $result array in HTML table below : 
//    - when you first load the page output all data from movies.csv file
//    - if you select dropdowns in filter form, movies should be filtered based on selection by genre, studio or year

// Check your result

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


$filename = "movies/movies.csv";
$handle = fopen($filename, "r");
$result = [];
$studios = array();
while (!feof($handle)) {
    $result[] = (fgetcsv($handle, 1000, ",")); // ";" csv file delimiter ( by default ",")
}

array_shift($result);

foreach ($result as $key => $value) {

    $studios[] = ($result[$key]['2']);
    $movieGenre[] = ($result[$key]['1']);
    $movieYear[] = ($result[$key]['7']);
}
$studios_filtered = array_unique($studios);
$movies_filtered = array_unique($movieGenre);
$years_filtered = array_unique($movieYear);
// var_dump($result);

function display_results($array)
{
    $filtered_results = [];


    foreach ($array as $key => $value) {
        if ($_POST['genre'] != 'Choose...' && $array[$key][1] != $_POST['genre'])
            continue;
        if ($_POST['studio'] != 'Choose...' && $array[$key][2] != $_POST['studio'])
            continue;
        if ($_POST['years'] != 'Choose...' && $array[$key][7] != $_POST['years'])
            continue;

        $filtered_results[] = $array[$key];

        echo  " <tr>";
        echo     '<th scope="col">' . $array[$key][0] . '</th>';
        echo      '<th scope="col">' . $array[$key][1] . '</th>';
        echo       '<th scope="col">' . $array[$key][2] . '</th>';
        echo      '<th scope="col">' . $array[$key][7] . '</th>';
        echo   " </tr>";
    }


    // var_dump($filtered_results);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
            <label class="my-1 mr-2">Genre: </label>
            <select class="custom-select my-1 mr-sm-2" name="genre">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                <?php if (isset($movies_filtered)) : ?>
                    <!--  -->
                    <?php foreach ($movies_filtered as $name) : ?>
                        <option value='<?php echo $name; ?>'> <?php echo $name; ?> </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <label class="my-1 mr-2">Company Production: </label>
            <select class="custom-select my-1 mr-sm-2" name="studio">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                <?php if (isset($studios_filtered)) : ?>
                    <!--  -->
                    <?php foreach ($studios_filtered as $name) : ?>
                        <option value='<?php echo $name; ?>'> <?php echo $name; ?> </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <label class="my-1 mr-2">Years: </label>
            <select class="custom-select my-1 mr-sm-2" name="years">
                <option selected>Choose...</option>
                <!-- List Years from CSV file here -->
                <?php if (isset($years_filtered)) : ?>
                    <!--  -->
                    <?php foreach ($years_filtered as $name) : ?>
                        <option value='<?php echo $name; ?>'> <?php echo $name; ?> </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <button type="submit" class="btn btn-primary my-1">Submit</button>
        </form>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
            if(isset($_POST['genre']) || isset($_POST['studio']) || isset($_POST['years'])){
                display_results($result);
            }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>