<?php
    include('DAOusuario.php');
    $nombre_cliente = $_POST['caja_nombre_cliente'];
    $primer_ap = $_POST['caja_primer_ap_cliente'];
    $segundo_ap = $_POST['caja_segundo_ap_cliente'];
    $direccion = $_POST['caja_direccion_cliente'];
    $telefono = $_POST['caja_telefono_cliente'];
    $email = $_POST['caja_email_cliente'];
    $pass = $_POST['caja_pass_cliente'];

    $clienteDAO = new usuarioDAO();
    $clienteDAO->agregarUsuario($nombre_cliente,$primer_ap,$segundo_ap,$direccion,$telefono,$email,$pass);

?>