<?php
require_once("../objetos/Explorador.php");
require_once("../objetos/Guerrero.php");
require_once("../objetos/Mago.php");
require_once("../objetos/Personaje.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Actividad 03 | Apartado 03</title>
</head>
<body>
    <div class="contenedor noflex">
    <?php
        $personajes = array();
        $personajes[0] = new Guerrero('Lothbrok','Viking', 72, 61);
        // $personajes[0]->setNombre('Albert');
        // $personajes[0]->setEspecie('Colosal');
        // $personajes[0]->setEneAba(30);
        // $personajes[0]->setDanSuf(80);

        $personajes[1] = new Mago("Gandalf", "Whites", 94, 203);
        // $personajes[1]->setNombre('Albert');
        // $personajes[1]->setEspecie('Colosal');
        // $personajes[1]->setSecDes(30);
        // $personajes[1]->setHecLan(80);

        $personajes[2] = new Explorador("J.Cook", "Forest", 30, 43);
        // $personajes[2]->setNombre('Albert');
        // $personajes[2]->setEspecie('Colosal');
        // $personajes[2]->setObjDes(30);
        // $personajes[2]->setNumNoDes(80);

        foreach($personajes as $personaje){
            echo "$personaje<br>";
        }
        
    ?>
    </div>
    <a href="../index.html"><input type="button" value="Volver"></a>
</body>
</html>