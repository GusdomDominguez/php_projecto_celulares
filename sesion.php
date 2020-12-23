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
        <a href="" class="nav-link">
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
        <img src="assets/login.png" class="img-fluid" alt="Responsive image" id="image">
        <div class="textIndex">
            <form action="formulario.php" method="post">        
                <h2>Formulario de inicio de sesión</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="admin" placeholder="Ingrese el nombre de usuario administrador">
                    <small id="emailHelp" class="form-text text-muted">Debe ser el usuario valido como administrador.</small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <a href="formulario.php">
                    <button type="submit" class="btn btn-primary btn-block">INICIAR</button>
                </a>
            </form>
            </div>        
        </div>
    </div>

  </body>
</html>