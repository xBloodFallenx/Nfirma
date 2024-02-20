<?php
require_once "..\..\models/User.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>

<body>

    <header>
        <h1>Actualizar Usuario</h1>
    </header>

    <div class="container-fluid">
        <form action="" method="post" class="form-neon" autocomplete="off">

            <label for="Primer_Nombre">Primer Nombre:</label>
            <input type="text" id="Primer_Nombre" name="Primer_Nombre" value="<?php echo $user->getPrimerNombre(); ?>">

            <label for="Segund_Nombre">Segundo Nombre:</label>
            <input type="text" id="Segund_Nombre" name="Segund_Nombre" value="<?php echo $user->getSegundoNombre(); ?>">

            <label for="Primer_Apellido">Primer Apellido:</label>
            <input type="text" id="Primer_Apellido" name="Primer_Apellido"
                value="<?php echo $user->getPrimerApellido(); ?>">

            <label for="Segund_Apellido">Segundo Apellido:</label>
            <input type="text" id="Segund_Apellido" name="Segund_Apellido"
                value="<?php echo $user->getSegundoApellido(); ?>">

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $user->getDireccion(); ?>">

            <label for="Telefono_Cor">Teléfono:</label>
            <input type="text" id="Telefono_Cor" name="Telefono_Cor" value="<?php echo $user->getTelefonoCor(); ?>">

            <label for="Celular">Celular:</label>
            <input type="text" id="Celular" name="Celular" value="<?php echo $user->getCelular(); ?>">

            <label for="Ext">Extensión:</label>
            <input type="text" id="Ext" name="Ext" value="<?php echo $user->getExt(); ?>">

            <label for="Ciudad">Ciudad:</label>
            <input type="text" id="Ciudad" name="Ciudad" value="<?php echo $user->getCiudad(); ?>">

            <label for="Indicativo">Indicativo:</label>
            <input type="text" id="Indicativo" name="Indicativo" value="<?php echo $user->getIndicativo(); ?>">

            <label for="Id_Cargo">ID Cargo:</label>