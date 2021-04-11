<?php
        //Creo una clase de tipo Rol
        class Rol
        {
            //id del rol
            public $id;
            //nombre empleado
            public $nombre;

            //Método constructor, en donde se inicializan los atribudos de la clase
            public function __construct()
            {
                $this->id = 0;
                $this->nombre = "";
            }
        }
?>