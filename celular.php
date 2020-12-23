<?php
$nombre = $_GET["celular"];

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=ventacelulares', 'ivan', 'ivan');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/* $statement = $pdo->prepare('SELECT * FROM celular  WHERE nombre = "Oneplus"'); */
$statement = $pdo->prepare("SELECT * FROM celular WHERE nombre=:nombre");
$statement->execute(['nombre' => $nombre]); 
$statement-> execute();
$celular = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    <div class="card" style="width: 60rem; margin: 0 auto;">
      <img class="card-img-top" src=<?php echo $celular[0]["imagen"];?> alt="Card image cap">
      <div class="card-body" id="cardCelular">
          <?php 
          ?>
          <h5 class="card-title"><?php echo $celular[0]["nombre"];?></h5>
        <p class="card-text"><?php echo $celular[0]["descripcion"];?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b><?php echo '<h3>' . $celular[0]["precio"] . '$</h3>';?></b></li>
      </ul>
    </div>
</div>

  </body>
</html>