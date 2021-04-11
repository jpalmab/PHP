<?php 
    require_once '../dao/Roles.dao.php';

    $rol = RolesDAO::buscarPorId($_GET['id']);
?>


<!DOCTYPE html>

<html>
    <head>
    <!-- Llamo el archivo styles.css para poder aplicar los estilos a esta página web -->
    <link rel="stylesheet" href="../css/styles.css">

    <meta charset = "UTF-8">
    <!-- Hago adaptable la página web, a celulares, tablets, ordenadores, etc... -->
    <meta name = "viewport" content = "width=device-width, initial-scale =1.0">

    <title>Modificar Rol</title>
    </head>
    <center>
    <body>
        <br><br>
        <h1>Modificar Rol</h1>

        <!-- Llamo una clase del controlador 
            la variable a(después de .php?), es la que lleva la acción al controlador-->    
        <form action="../controlador/roles.controlador.php?a=edit" method="POST">
            <input type="hidden" name="id" value="<?=$rol[0]?>" />
            <input type="text" name="nombre" placeholder="Nombre" value="<?=$rol[1]?>" required />
            <br></br>
            <input type="submit" class = "buttonPrincipal button1" value="Editar" />
            <a href="index.php" class = "buttonEliminar button1">Regresar</a>
        </form>
    
    </body>
    </center>
</html>