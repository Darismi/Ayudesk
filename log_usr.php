<?php
    require "conexion.php";
    session_start();
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($C_empresaInfo, "SELECT * FROM usuario where usuario = '".$usuario."' and contraseña ='".$contraseña."'");
    $nr = mysqli_num_rows($query);
    $row = $query -> fetch_row();

    $_SESSION['idusuario'] = $row[0];
    $_SESSION['usuario'] = $usuario;

    if ($nr == 1) {
      header("Location: captura_incidentes.php");
    }else if ($nr == 0){
      header("Location: index.php");
    }
 ?>
