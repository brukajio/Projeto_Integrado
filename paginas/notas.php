<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/css.css">
  </head>

  <body>
    <header>
      <img src="../img/uscs-logo.png" alt="">

      <nav>
        <ul id="menu">
         <li><a href="../index.html">Home</a></li>
         <li><a href="grade.html">Grade</a></li>
         <li><a href="Mensalidade.html">Mensalidades</a></li>
         <li><a href="notas.php">Notas</a></li>
        </ul>
      </nav>
      <h1>Notas</h1>
    </header>
    <div class="">


    <section id="formularios">

<br><br><br>
    <form class="principal" action="resultado.php" method="get">
      <fieldset>

         <legend>Cálculo 1</legend>
     <p>Materia: <input type="text" name="txtMateria1"></p>
     <p>Nota P1: <input type="text" name="txtp11" ></p>
     <p>Nota P2: <input type="text" name="txtp21" ></p>
     <p>Nota complementar: <input type="text" name="txtTrab1"></p>

  </fieldset>

  <fieldset>
  <legend>Cálculo 2</legend>

    <p>Materia: <input type="text" name="txtMateria2"></p>
    <p>Nota P1: <input type="text" name="txtp1_2" ></p>
    <p>Nota P2: <input type="text" name="txtp2_2" ></p>
    <p>Nota complementar: <input type="text" name="txtTrab2"></p>

 </fieldset>

 <fieldset>
 <legend>Cálculo 3</legend>

   <p>Materia: <input type="text" name="txtMateria3"></p>
   <p>Nota P1: <input type="text" name="txtp1_3" ></p>
   <p>Nota P2: <input type="text" name="txtp2_3" ></p>
   <p>Nota complementar: <input type="text" name="txtTrab3"></p>
</fieldset>
<input  type="submit" name="btnEnviar" value="Enviar">
</form>


      </section></div>
  </body>
</html>
