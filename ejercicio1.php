<?php
$saludo = 'Hello world!';


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Ejercicio 1</h1>
      <p class="lead"><?php print($saludo) ?></p>
    </div>
  </div>

  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1. Escribir un programa que muestre el nombre del día de la semana según el número de día. Además nos dirá si es fin de semana (sábado y domingo).
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <?php
          $ejercicio1 = date('N');

          switch ($ejercicio1) {
            case 1:
              echo 'Hoy es lunes, no es fin de semana';
              break;

            case 2:
              echo 'Hoy es martes, no es fin de semana';
              break;

            case 3:
              echo 'Hoy es miércoles, no es fin de semana';
              break;
            case 4:
              echo 'Hoy es jueves, no es fin de semana';
              break;
            case 5:
              echo 'Hoy es viernes, no es fin de semana';
              break;
            case 6:
              echo 'Hoy es sábado, ¡es fin de semana!';
              break;
            case 7:
              echo 'Hoy es domingo, ¡es fin de semana!';
              break;
          }


          ?>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2. Escribir un programa que nos diga si un año es bisiesto. Año bisiesto es el divisible entre 4, salvo que sea año secular -último de cada siglo, terminado en <<00>>-, en cuyo caso también ha de ser divisible entre 400.
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <?php
          $ejercicio2 = date('L');
          $ejercicio2Año = date('o');

          if ($ejercicio2 == 0) {
            echo "$ejercicio2Año no es un año bisiesto";
          } else {
            echo "$ejercicio2Año es un año bisiesto";
          }


          ?>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3. Escribir un programa que nos diga el nombre del mes según el número del mes y además nos diga cuántos días tiene ese mes.
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <?php

          $ejercicio3Mes = date('F');
          $ejercicio3DiasMes = date('t');

          echo "Estamos en el mes $ejercicio3Mes, el cual tiene $ejercicio3DiasMes días";

          //alternativa, hacer un switch como en el ejercicio1

          ?>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            4. Escribir un programa que calcule el promedio de 4 notas: 55, 71, 46, 87, y nos diga si el promedio es matrícula (+ de 9), aprobado o suspenso.
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <?php

          $ejercicio3Mes = date('F');
          $ejercicio3DiasMes = date('t');

          echo "Estamos en el mes $ejercicio3Mes, el cual tiene $ejercicio3DiasMes días";

          //alternativa, hacer un switch como en el ejercicio1

          ?>
        </div>
      </div>
    </div>
  </div>

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