<?php
$username= $_POST["admin"];
$password= $_POST["password"];
try{
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ventacelulares', $username, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('SELECT * FROM celular ORDER BY nombre DESC');
    $statement-> execute();
    $celulares = $statement->fetchAll(PDO::FETCH_ASSOC);
}catch (\Throwable $th){
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error al iniciar sesion!</h4>
    <p><?php echo "ERROR: " . $th->getMessage(); ?></p>
    <hr> 
    <a href="index.php"><p class="mb-0">Por favor, vuelva a la pagina de inicio.</p></a>
    </div>
    <?php
    
    exit();
}

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
        <div class="textIndex">
            <form action="subida.php" method="post" enctype="multipart/form-data">
                <h2>Actualizar imagenes: </h2>
                <input type="text" class="form-control"  placeholder="Ingrese el nombre del producto" name="celular">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
                <button type="submit" class="btn btn-primary btn-block">INICIAR</button>

            </form>
            </div>        
        </div>
    </div>

  </body>
</html>