<?php
    include('conexion.php');

    class usuarioDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBD();
        }

        public function agregarUsuario($nombre,$primerAp,$segundoAp,$direccion,$telefono,$email,$contraseña){
            $sql = "insert into cliente(nombre,primer_ap_cliente,segundo_ap_cliente,direccion,telefono,email,password) values('$nombre','$primerAp','$segundoAp','$direccion','$telefono','$email','$contraseña')";

            if(mysqli_query($this->conexion->getConexion(), $sql)){
                echo "exito al agregar";
            }
            else{
                echo "error al agregar";
            }
        }
    }
?>