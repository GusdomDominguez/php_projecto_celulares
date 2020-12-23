<?php
    $nombre = $_POST["celular"];
    function randomString($n){
        $characters = '0123456789abcdefghijklmnopqrstvwxyz';
        $str = '';
        for($i = 0 ; $i < $n ; $i++){
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    };
    $imagen = $_FILES['imagen'] ?? null;
    if(!is_dir('images')){
        mkdir('images');
    }
    if($imagen){
        $imagePath = 'images/'.randomString(8) . '.jpg';
        move_uploaded_file($imagen['tmp_name'], $imagePath);
    };
    try{
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ventacelulares', "ivan", "ivan");
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare("UPDATE celular SET imagen=:imagen WHERE nombre=:nombre");
        $statement->bindValue(':imagen', $imagePath);
        $statement->bindValue(':nombre', $nombre);
        $statement-> execute();
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Exito!</h4>
        <p>Su imagen fue actualizada correctamente!</p>
        <hr> 
        <a href="index.php"><p class="mb-0">Por favor, vuelva a la pagina de inicio.</p></a>
        </div>
        <?php
    }catch (\Throwable $th){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p><?php echo "ERROR: " . $th->getMessage(); ?></p>
        <hr> 
        <a href="index.php"><p class="mb-0">Por favor, vuelva a la pagina de inicio.</p></a>
        </div>
        <?php
    }

?>