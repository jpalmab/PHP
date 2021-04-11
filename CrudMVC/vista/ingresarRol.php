<!DOCTYPE html>

<html>
   
    <head>
    <!-- Llamo el archivo styles.css para poder aplicar los estilos a esta página web -->
    <link rel="stylesheet" href="../css/styles.css">

    <meta charset = "UTF-8">
    <!-- Hago adaptable la página web, a celulares, tablets, ordenadores, etc... -->
    <meta name = "viewport" content = "width=device-width, initial-scale =1.0">

    
    <title>Ingresar Nuevo</title>
    </head>
    <body>
        <center>
        <br><br>
        <h1>Agregar Rol</h1>
        </center>
        <!-- Llamo una clase del controlador 
            la variable a(después de .php?), es la que lleva la acción al controlador-->
        <center>    
        <form action="../controlador/roles.controlador.php?a=ingr" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required/>
            <br></br>
            <button type="sumbit" class = "buttonPrincipal button1">Agregar</button> 
            <a href="index.php" class = "buttonEliminar button1">Regresar</a>
        </form>
        </center>
    
    </body>

</html>