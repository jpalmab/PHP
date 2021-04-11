<?php
//Este archivo va a tener todas las consultas SQL 

    require_once '../modelo/conexion.php';
    require_once '../modelo/Rol.php';
    class RolesDAO
    {
        /**
         * Listo los datos de la tabla "roles" de la base de datos
         */
        public static function listarDatos()
        {
            $con = new Conexion();

            $cont = $con->ejecutarConsulta("SELECT * FROM roles");

            $con->cerrarConexion();

            return $cont;
        } 
    
         /**
          *  Agrega un registro de tipo Rol, a la base de datos
          */
         public static function ingresarDato($rol)
        {
            $con = new Conexion();

            $con->ejecutarActualizacion("INSERT INTO roles(nombre) VALUES ('". $rol->nombre ."')");

            $con->cerrarConexion();
         }

         /**
          * Busca un objeto de tipo rol por su id (idRol)
          */
         public static function buscarPorId($id)
         {
            $con = new Conexion();

            //Contenedor del dato consultado
            $cont = $con->ejecutarConsulta("SELECT * FROM roles where idRol = $id");

            $con->cerrarConexion();

            //Como es sólo un registro, se pasa la posición 0
            return $cont[0];
         }

         /**
          * Modificar un objeto de tipo rol, el cual es el ingresado por parámetro
          */
         public static function editarDato($rol)
         {
             $con = new Conexion();

             $con->ejecutarActualizacion(" UPDATE roles set nombre = '". $rol->nombre ."' where idRol = '". $rol->id ."' ");


            $con->cerrarConexion();
         }
         /**
          * Elimina un rol através de su id (idRol), este id es el ingresado por parámetro
          */
         public static function eliminar($id)
         {
            $con = new Conexion();

            $con->ejecutarActualizacion(" DELETE FROM roles where idRol = $id ");

            $con->cerrarConexion();
         }

    }

?>
