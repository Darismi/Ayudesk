<?php
    require "conexion.php";
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($Conexion, "SELECT * FROM usuario where usuario = '".$usuario."' and contraseña ='".$contraseña."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
      header("Location: captura_incidentes.php");
    }else if ($nr == 0){
      header("Location: index.php");
    }
 ?>
