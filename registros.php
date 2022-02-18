<html>
  <head>
    <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
    <link rel="stylesheet" href="css/registros.css">
    <title>Formulario</title>
  </head>
  <body>
    <main>
      <div class="contenedor">
        <?php
          $conexion = mysqli_connect("localhost", "id18464140_root", "Steicytorres.1", "id18464140_formulariomyp") or
          die("Problemas con la conexión");

          mysqli_query($conexion, "insert into registros(primernombre,segundonombre,primerapellido,segundoapellido,telefono,email,edad,sexo,mensaje) values ('$_REQUEST[primernombre]','$_REQUEST[segundonombre]','$_REQUEST[primerapellido]','$_REQUEST[segundoapellido]',$_REQUEST[telefono],'$_REQUEST[email]',$_REQUEST[edad],'$_REQUEST[sexo]','$_REQUEST[mensaje]')") or
            die("Problemas en el select" . mysqli_error($conexion));

          mysqli_close($conexion);

          echo '<h2>' . "Sus datos fueron cargados exitosamente." . '<h2>';
        ?>
      <form action="index.html" method="post" class="btn">
        <input type="submit" value="Regresar" id="btn">
      </form>
      </div>
    </main>
  </body>
</html>