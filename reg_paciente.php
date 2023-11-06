<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reg_style.css">
    <title>REGISTRO DE PACIENTES</title>
</head>
<body>
    <h1 style="color: #017B43; position: relative; text-align: center; top: 40px; font-family: 'Bree Serif', serif;">
    REGISTRO DE PACIENTES</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre del paciente">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="padecimiento" placeholder="Padecimiento">
        <input type="text" name="sala" placeholder="Sala">
        <input type="submit" name="registrar" value="Registrar">
    </form>
    <?php
    include("reg.php"); 
    ?>
</body>
</html>
