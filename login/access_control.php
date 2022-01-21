<?php

$input = $_POST;
/* 
print_r($input); */

$keys = array(
    0 =>
    array(
        0 => 'tbedell0@wikimedia.org',
        1 => 'Qwlff8f',
    ),
    1 =>
    array(
        0 => 'arawling1@uiuc.edu',
        1 => 'l7BneiS',
    ),
    2 =>
    array(
        0 => 'lbuey2@nba.com',
        1 => 'Z2cx1Pk1p8Q',
    ),
    3 =>
    array(
        0 =>
        'scullum3@washington.edu',
        1 => 'qwmqVzE',
    ),
    4 =>
    array(
        0 => 'lokeshott4@overblog.com',
        1 => 'NoVinh',
    ),
);

$found = false;

for ($i = 0; $i < count($keys); $i++) {
    if ($input[0] === $keys[$i][0] && $input[1] === $datos[$i][1]) {
        $found = true;
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Acess Control</title>
</head>

<body>

    <?php

    if ($found === true) {
        echo '      <div class="alert alert-primary" role="alert">';
        echo 'Success! Access granted';
        echo '</div>';
    } else {
        echo '      <div class="alert alert-danger" role="alert">';
        echo 'Forbidden, restricted area.';
        echo '</div>';

        echo ' <a href="index.php" class="link-dark"> Try again </a>';
    };

    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>