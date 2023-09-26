<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Practica PHP</title>
</head>


<body class='body'>

    <h1 class="sara">  PRÁCTICA  </h1>
   
    <?php
      // Texto
      echo "PRÁCTICA";
      // Espacio
      echo "<br><br>";

      // Botón "Ir a otra carpeta"
      echo '<a href="/miaplicacionphp/index.php">Ir a otra carpeta</a>
      <br><br>';
    
      // Hora
      date_default_timezone_set('America/Argentina/Buenos_Aires');
      $fechayhora = date('m-d-Y h:i:s a');
      echo $fechayhora;
    ?>

</body>


<br><br>
<a href="/miaplicacionphp/index.php">Ir a index</a>
    