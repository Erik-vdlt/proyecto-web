<?php

    class ConexionBD{
        private $conexion;
        private $host = 'localhost:3306';
        private $usuario = 'erik';
        private $contraseña = 'erik_1';
        private $bd = 'tienda';

        public function __construct(){
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);

            if($this->conexion){
                echo "conexion establecida";
            }
            else{
                die("error de conexion " . mysqli_connect_error() . mysqli_connect_errno());
            }
        }

        public function getConexion(){return $this->conexion;}
    }
?>