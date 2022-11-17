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
    <title>Actividad 03 | Apartado 02</title>
</head>
<body>
    <div class="contenedor">
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="altura" class="etiqueta">Altura (CM)</label>
            <input type="number" name="altura" id="altura">
            <label for="peso" class="etiqueta">Peso</label>
            <input type="number" name="peso" id="peso">
            <a href="apartado2-2.php"><input type="submit" name="continuar" value="Continuar"></a>
            <span>
            <?php
                if (isset($_POST['altura']) && isset($_POST['peso'])){
                    if(empty($_POST['altura'])==true){
                        echo "Tienes que introducir la altura.<br>";
                    }else{
                        $_SESSION['altura'] = $_POST['altura'];
                        if(empty($_POST['peso'])==true){
                            echo "Tienes que introducir el peso.<br>";
                        }else{
                            $_SESSION['peso'] = $_POST['peso'];
                            header("location:apartado2-3.php");
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