<?php
class Conexion{
    private $hostname;
    private $usuario;
    private $clave;
    private $base;

    private $conexion;

    public function __construct()
    {
        $this->hostname = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->base = "mvc-rol";

        $this->conexion = new mysqli($this->hostname, $this->usuario, $this->clave, $this->base);

    }

    public function ejecutarConsulta($sql)
    {
        //Guardo los datos obtenidos de el $sql en la variable contenedor
        $contenedor = $this->conexion->query($sql); 
        //Todos los datos los guardo como un arreglo de arreglos(arreglo bidimensional)
        return $contenedor->fetch_all();

    }

    public function ejecutarActualizacion($sql)
    {
        $this->conexion->query($sql); 
    }

    public function cerrarConexion()
    {
        $this->conexion->close();
    }
}