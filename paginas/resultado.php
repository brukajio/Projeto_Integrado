<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/css.css">
  </head>

  <body>
    <?php
   $nota11 = $_GET["txtp11"];
   $nota21 = $_GET["txtp21"];
   $materia1 = $_GET["txtMateria1"];
   $trabalho1 = $_GET["txtTrab1"];

  echo "Nota 1 ".$nota11;
  echo "Nota 2 ".$nota21;
  echo "Matéria ".$materia1;
  echo "Trabalho ".$trabalho1;

     ?>

  </body>
</html>
