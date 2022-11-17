<?php
session_start();
if(!isset($_SESSION['rndm'])){
    $_SESSION['rndm'] = rand(1,100);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Actividad 03 | Apartado 01</title>
</head>

<body>
    <h1 class="titulo">Apartado 1</h1>
    <div class="contenedor">
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="numero">Introduce un numero del 1 al 100 y comprueba si has acertado.</label>
            <input type="text" name="num">
            <input type="submit" name="comprobar" value="Comprobar resultado">
            <span class="resultado">
                <?php
                    if(isset($_POST['num'])){
                        $introducido = (int)$_POST['num'];
                        if(empty($introducido)==true){
                            echo "No has introducido ningún número.";
                        }else if(empty($introducido)==false){
                            if ($introducido>$_SESSION['rndm']){
                                echo $introducido ." es mayor que el número que tienes que adivinar.";
                            }else if($introducido<$_SESSION['rndm']){
                                echo $introducido ." es menor que el número que tienes que adivinar.";
                            }else{
                                echo "¡Has acertado el número!";
                                session_destroy();
                            }
                        }
                    } 
                ?>
            </span>
        </form>
    </div>
    <a href="../index.html"><input type="button" value="Volver"></a>
</body>

</html>