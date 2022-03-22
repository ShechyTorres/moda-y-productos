<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
  <link rel="stylesheet" href="css/estilos-buscador.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador</title>
</head>
<body>
    <main class="main">
    <a href="index.html"><button type="button" class="boton">🢀</button></a>
      <div class="contenedor_todos">
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "formulario") or
        die("Problemas con la conexión");
        // $conexion = mysqli_connect("localhost", "id18464140_root", "Steicytorres.1", "id18464140_formulariomyp") or
        // die("Problemas con la conexión");
        
        $busqueda = mysqli_query($conexion, "select * from registros where id='$_REQUEST[id]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        
        echo "<h2 class=div-btn> DATOS DEL REGISTRO </h2>";
        echo "<table border=1>";
        echo "  <tr>";
        echo "    <th> Id </th>";
        echo "    <th> Primer nombre </th>";
        echo "    <th> Segundo nombre </th>";
        echo "    <th> Primer apellido </th>";
        echo "    <th> Segundo apellido </th>";
        echo "    <th> Teléfono </th>";
        echo "    <th> Email </th>";
        echo "    <th> Edad </th>";
        echo "    <th> Sexo </th>";
        echo "    <th> Mensaje </th>";
        echo "    <th> Operación </th>";
        echo "  </tr>";

        while ($busc = mysqli_fetch_array($busqueda)) {
          echo "  <tr>";
          echo "    <td> " . $busc['id'] . "</td>";
          echo "    <td> " . $busc['primernombre'] . "</td>";
          echo "    <td> " . $busc['segundonombre'] . "</td>";
          echo "    <td> " . $busc['primerapellido'] . "</td>";
          echo "    <td> " . $busc['segundoapellido'] . "</td>";
          echo "    <td> " . $busc['telefono'] . "</td>";
          echo "    <td> " . $busc['email'] . "</td>";
          echo "    <td> " . $busc['edad'] . "</td>";
          echo "    <td> " . $busc['sexo'] . "</td>";
          echo "    <td> " . $busc['mensaje'] . "</td>";
          echo "    <td> " 
            ?> 
              <a href="eliminar_eliminado.php?id=<?php echo $busc['id']; ?>" class="confirmar_eliminar">Eliminar</a> |
              <a href="editar.php?id=<?php echo $busc['id']; ?>">Actualizar</a> 
            <?php 
            "</td>";
          echo "  </tr>";
        }
        echo "</table>";

          /* mysqli_query($conexion, "delete from registros where id='$_REQUEST[id]'") or
          die("Problemas en el select:" . mysqli_error($conexion));
          echo "Se efectuó el borrado del curso ingresado."; */

        ?>
    </div>
    <script src="eliminar_confirmacion.js"></script>
  </main>
</body>
</html>