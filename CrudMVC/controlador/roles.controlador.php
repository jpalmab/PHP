<?php
    //Coloco los archivos .php de los cuales estoy recibiendo datos,
    //o de los que necesito métodos u operaciones
    require_once '../dao/Roles.dao.php';
    require_once '../modelo/Rol.php';

    /**
     * Recibo la variable a del formulario, index.php, editarRol.php e ingresarRol.php
     * Procedo a realizar un switch-case para identificar qué formulario o archivo
     * me está enviando dicha petición, identifica la petición solicitada
     * y procede con la ejecución respectiva
     */
    switch ($_GET['a'])
    {
        case 'ingr':
            $r = new Rol();

            $r->nombre = $_POST['nombre'];
            RolesDAO::ingresarDato($r);
            break;

        case 'edit':
            $r = new Rol();

            $r->id = $_POST['id'];
            $r->nombre = $_POST['nombre'];
            RolesDAO::editarDato($r);
            break;
        
        case 'elim':
            RolesDAO::eliminar($_GET['id']);
            break;
    }

    header("Location: ../vista");
?>
