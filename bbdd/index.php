<?php
spl_autoload_register(function ($myClass) {
    //esto es de la carga automatica de clase
    require_once $myClass . '.php';
    //require_once requiere una vez solo 
});
$login = new Login(
    'localhost',
    'root',
    '1234',
    'cities'
);
//$firstLogin = new Login("localhost", "root", "1234", "cities");

$login->setQuery('select id, name, countrycode from CITY');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Country Code</th> -->
                <?php
                $login->getHeaders(
                    'id',
                    'name',
                    'countrycode'
                );
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                //aquí llamamos a
                $login->generateRows(
                    'id',
                    'name',
                    'countrycode'
                );
                ?>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/boot
strap@5.0.2/dist/js/bootstrap.bundle.m
in.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoM
p4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>