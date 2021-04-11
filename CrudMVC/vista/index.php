<!DOCTYPE html>

<html>


    <head>
    <!-- Llamo el archivo styles.css para poder aplicar los estilos a esta página web -->
    <link rel="stylesheet" href="../css/styles.css">

    <meta charset = "UTF-8">
    <!-- Hago adaptable la página web, a celulares, tablets, ordenadores, etc... -->
    <meta name = "viewport" content = "width=device-width, initial-scale =1.0">


        <title>Roles</title>
    </head>
    <center>
    <body>
        <h1>Roles</h1>
        <!--Creo el botón Registrar, que redirecciona a la página ingresarRol.php-->
        <a href="ingresarRol.php" class = "buttonPrincipal button1">Registrar</a>

        <!--Creo la tabla para identificar y administrar la lista de roles que hay-->
        <table id="customers" >
            
            <tr >
                
                <th><center>idCliente</center></th>
                <th><center>Nombre</center></th>
                <th colspan="2"><center>Opciones<center></th>
                
            </tr>

            <?php 

            require_once '../dao/Roles.dao.php';

             //Guardo los datos obtenidos en la variable fila
            foreach (RolesDAO::listarDatos() as $fila): ?>
                <tr>
                    <td><center>
                        <?= $fila[0] //El idRol está en la posición 0, el nombre está en la posición 1,  <?= es la opción simplificada de echo?>
                        </center>
                    </td>
                    <td>
                        <center>
                        <?= $fila[1] //Saco el campo "nombre" de la tabla roles?>
                        </center>
                    </td>
                    <td>
                        <center>
                        <!-- Opciones de cada dato por fila (Editar, Eliminar) -->
                        <a href="editarRol.php?id=<?=$fila[0]?>"class = "buttonPrincipal button1" >Editar</a>
                        <a href="../controlador/roles.controlador.php?a=elim&id=<?=$fila[0]?>" onclick=" return confirm ('¿Desea eliminar el registro?')" class = "buttonEliminar button1" >Eliminar</a>
                        </center>

                        
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    
    </body>
    </center>

</html>