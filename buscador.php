<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador</title>
</head>
<body>
    <main class="main">
    <div class="contenedor">
      <?php
        $conexion = mysqli_connect("localhost", "id18464140_root", "Steicytorres.1", "id18464140_formulariomyp") or
          die("Problemas con la conexión");

        $busqueda = mysqli_query($conexion, "select primernombre,primerapellido,edad,sexo,mensaje from registros where id='$_REQUEST[id]'") or
          die("Problemas en el select:" . mysqli_error($conexion));

        if ($busc = mysqli_fetch_array($busqueda)) {
          echo "Nombre: " . $busc['primernombre'] . "<br>";
          echo "Apellido: " . $busc['primerapellido'] . "<br>";
          echo "Edad: " . $busc['edad'] . "<br>";
          echo "Sexo: " . $busc['sexo'] . "<br>";
          echo "Mensaje: " . $busc['mensaje'] . "<br>";
        } else {
          echo "No existe un alumno con ese id";
        }
        mysqli_close($conexion);
      ?>
      <form action="index.html" method="post" class="btn">
        <input type="submit" value="Regresar" id="btn">
      </form>
    </div>
  </main>
</body>
</html>