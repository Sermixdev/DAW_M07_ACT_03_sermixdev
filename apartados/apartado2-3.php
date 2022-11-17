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
        <?php
        // Nombre de usuario
            echo "<h2 class='subtitulo'>¡Hola ".$_SESSION['nombre']."!</h2>";
        // Edad de usuario
            $edad = date("Y") - $_SESSION['anyonacimiento'];
            echo "<h2 class='subtitulo'>Este año haces o has hecho ".$edad." años.</h2>";
        // IMC
            $imc = $_SESSION['peso'] / (pow($_SESSION['altura']/100, 2));
            echo "<h2 class='subtitulo'>Tu índice de masa corporal es ".sprintf("%.1f", $imc ).".</h2>";
        // Tipo de peso 
            if ($imc<18.5){
                echo "<h2 class='subtitulo'>Tienes un peso insuficiente.</h2>";
            }else if($imc>=18.5 && $imc<=24.9){
                echo "<h2 class='subtitulo'>Tienes un peso normal.</h2>";
            }else if($imc>=25 && $imc<=50){
                echo "<h2 class='subtitulo'>Tienes sobrepeso.</h2>";
            }else{
                echo "<h2 class='subtitulo'>Tienes obesidad.</h2>";
            }
        ?>
        <a href="../index.html"><input type="button" name="volver" value="Volver"></a>
    </div>
</body>
</html>