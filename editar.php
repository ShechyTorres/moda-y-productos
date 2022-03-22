<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
  <title>Actualizar</title>
  <link rel="stylesheet" href="css/estilos-formulario.css">
  <link rel="stylesheet" href="css/fontello.css">
</head>

<body>
  <section>
    <a href="todos.php"><button type="button" class="boton">🢀</button></a>
    <aside class="llenado">
      <form name="formulario" action="editar_editado.php" method="post">
        <h2>ACTUALIZAR DATOS</h2>
        <h5><label for="campos obligatorios" class="required">Estos campos son obligatorios</label></h5>

        <?php
          $conexion = mysqli_connect("localhost", "root", "", "formulario") or
          die("Problemas con la conexión");
          
          $busqueda = mysqli_query($conexion, "select * from registros where id='$_GET[id]'") or
          die("Problemas en el select:" . mysqli_error($conexion));

          if ($upd = mysqli_fetch_array($busqueda)) {
            ?>

            <input type="hidden" name="id" value="<?php echo $upd['id'] ?>">

            <label for="primernombre" class="required">Primer Nombre:</label><br>
            <input type="text" name="primernombre" value="<?php echo $upd['primernombre'] ?>" required pattern="[A-Za-z0-9]{1,20}" title="Letras y números. Tamaño mínimo: 1. Tamaño máximo: 20">
            <br>
            <label for="segundonombre">Segundo Nombre:</label><br>
            <input type="text" name="segundonombre" value="<?php echo $upd['segundonombre'] ?>" pattern="[A-Za-z]{2,20}" title="Solo letras. Tamaño mínimo: 2. Tamaño máximo: 20">
            <br>
            <label for="primerapellido" class="required">Primer Apellido:</label><br>
            <input type="text" name="primerapellido" value="<?php echo $upd['primerapellido'] ?>" required pattern="[A-Za-z]{2,20}" title="Solo letras. Tamaño mínimo: 2. Tamaño máximo: 20">
            <br>
            <label for="segundoapellido">Segundo Apellido:</label><br>
            <input type="text" name="segundoapellido" minlength="2" maxlength="20" value="<?php echo $upd['segundoapellido'] ?>" pattern="[A-Za-z]{2,20}" title="Solo letras. Tamaño mínimo: 2. Tamaño máximo: 20">
            <br>
            <label for="telefono" class="required">Celular/Telefono:</label><br>
            <input type="tel" name="telefono" value="<?php echo $upd['telefono'] ?>" required pattern="[0-9]{10}" title="Solo numeros. Tamaño máximo: 10">
            <br>
            <label for="email" class="required">Correo Electronico:</label><br>
            <input type="email" name="email" value="<?php echo $upd['email'] ?>" required pattern="/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/">
            <br>
            <label for="edad" class="required">Edad:</label>
            <input type="number" name="edad" min="1" max="100" value="<?php echo $upd['edad'] ?>" required pattern="[0-9]{1,100}">
            <br>

            <p class="required">Sexo:</p>
            <input type="radio" name="sexo" value="masculino" class="sexo">
            <label for="M">Masculino</label><br class="br">
            <input type="radio" name="sexo" value="femenino" class="sexo">
            <label for="F">Femenino</label>
            <input type="radio" name="sexo" value="otros" class="sexo" checked>
            <label for="O">Otro</label>
            <br>

            <br>
            <label for="mensaje">Mensaje:</label><br>
            <textarea name="mensaje" placeholder="Escriba aquí su mensaje"></textarea>
            <br>

            <input type="submit" value="ENVIAR" id="btn">
          </form>
          <?php
          } else {
            echo '<h2>' . "No existe un alumno con ese id" . '</h2>';
          }
      ?>
    </aside>
  </section>
</body>

</html>