<?php
    require "conexion.php";
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($C_empresaInfo, "SELECT * FROM asistente where usuario = '".$usuario."' and contraseña ='".$contraseña."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
      header("Location: revision_incidente.php");
    }else if ($nr == 0){
      header("Location: login_asistente.php");
    }
 ?>
