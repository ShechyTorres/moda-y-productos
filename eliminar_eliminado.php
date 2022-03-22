<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
  <link rel="stylesheet" href="css/registros.css">
  <title>Eliminar</title>
</head>
<body>
  <main>
    <div class="contenedor">
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "formulario") or
        die("Problemas con la conexión");

        $del = "delete from registros where id='$_REQUEST[id]'";
        
        $delete = mysqli_query($conexion, $del);

        if ($delete) {
          echo '<h2>' . "Registro Eliminado." . '</h2>';
        } else {
          echo '<h2>' . "No se pudo eliminar los datos" . '</h2>';
        }
        mysqli_close($conexion);
      ?>
      <form action="todos.php" method="post" class="btn">
        <input type="submit" value="Regresar" id="btn">
      </form>
      <br>
    </div>
  </main>
</body>
</html>