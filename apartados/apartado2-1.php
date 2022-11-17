<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Actividad 03 | Apartado 02-01</title>
</head>
<body>
    <div class="contenedor">
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="anyonacimiento">Año de nacimiento</label>
            <input type="number" name="anyonacimiento" id="anyonacimiento">
            <a href="apartado2-2.php"><input type="submit" name="continuar" value="Continuar"></a>
            <span>
            <?php
                if (isset($_POST['nombre']) && isset($_POST['anyonacimiento'])){
                    if(empty($_POST['nombre'])==true){
                        echo "Tienes que introducir el nombre.<br>";
                    }else{
                        $_SESSION['nombre'] = $_POST['nombre'];
                        if(empty($_POST['anyonacimiento'])==true){
                            echo "Tienes que introducir año de nacimiento.<br>";
                        }else{
                            $_SESSION['anyonacimiento'] = $_POST['anyonacimiento'];
                            header("location:apartado2-2.php");
                        }
                    }
                    
                }
            ?>
            </span>
            <a href="../index.html"><input type="button" name="volver" value="Volver"></a>
        </form>
    </div>
    
</body>
</html>