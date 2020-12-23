<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ventacelulares', 'ivan', 'ivan');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM celular ORDER BY nombre DESC');
$statement-> execute();
$celulares = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />

    <title>SmartPhones</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">SmartPhones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
        <li class="nav-item">
        <a href="sesion.php" class="nav-link">
        <button type="button" class="btn btn-outline-success btn-sm">Iniciar Sesion</button>
        </a>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="celular.php?celular=Samsung" >Samsung</a>
        <li class="nav-item">
        <a class="nav-link" href="celular.php?celular=Xiaomi" >Xiaomi</a>
        <li class="nav-item">
        <a class="nav-link" href="celular.php?celular=Motorola" >Motorola</a>
        <li class="nav-item">
        <a class="nav-link" href="celular.php?celular=Oneplus" >OnePlus</a>
        <li class="nav-item">
        <a class="nav-link" href="celular.php?celular=Iphone" >Iphone</a>     
    </ul>
  </div>
</nav>
    <div class="containerIndex">
        <img src="assets/phone.png" class="img-fluid" alt="Responsive image" id="image">
        <div class="textIndex">
            <h2>Bienvenido a SmartPhones!</h2>
            <p>Un smartphone es un teléfono celular con pantalla táctil y un robusto sistema operativo con el que los usuarios pueden conectarse a internet, instalar aplicaciones y llevar a cabo muchas de las actividades que podrían realizar en una computadora.</p>
        </div>
    </div>
  </body>
</html>