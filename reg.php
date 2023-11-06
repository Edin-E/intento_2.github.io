<?php
include("conex.php"); // Asegúrate de que el nombre del archivo sea correcto.

if (isset($_POST['registrar'])) {
    if(strlen($_POST['nombre']) >=1 &&
        strlen($_POST['edad']) >=1 &&
        strlen($_POST['padecimiento']) >=1 &&
        strlen($_POST['sala'])>=1) {
    $nombre = trim($_POST['nombre']);
    $edad = trim($_POST['edad']);
    $padecimiento = trim($_POST['padecimiento']);
    $sala = trim($_POST['sala']);
    $fecha_reg = date("d/m/y");
    $consulta = "INSERT INTO prueba1 (nombre, edad, padecimiento, sala, fecha_reg) VALUES ('$nombre', '$edad', '$padecimiento', '$sala', '$fecha_reg')";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        ?>
        <h3 class="ok">El paciente esta registrado correctamente</h3>
        <?php
    } else {
        ?>
        <h3 class="bad">Ha ocurrido un error</h3>
        <?php 
    }

        } else {
            ?>
            <h3 class="bad">Complete los campos</h3>
            <?php
        }
    }
    ?>
