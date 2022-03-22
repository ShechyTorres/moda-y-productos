<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos-buscador.css">
  <title>Consultas</title>
</head>
<body>
  <main class="main">
    <a href="index.html"><button type="button" class="boton">🢀</button></a>
    <div class="contenedor">
      <form action="consulta.php" method="post" class="navbar-form navbar-left" role="search">
        <div class="form-group navbar-buscar">
          <input type="text" name="id" class="form-control navbar-buscar" id="input_buscar" placeholder="Buscar por id" autofocus="autofocus" required>
        </div>
        <div class="div-btn">
          <input type="submit" class="btn btn-default btn-buscar" id="btn" value="Buscar">
        </div>
      </form>
    </div>
  </main>
</body>
</html>