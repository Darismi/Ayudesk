<?php
    require "conexion.php";
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($Conexion, "SELECT * FROM tecnico where usuario = '".$usuario."' and contraseña ='".$contraseña."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
      echo "hola";
      header("Location: solucion_incidente.php");
    }else if ($nr == 0){
      header("Location: login_tecnico.php");
    }
 ?>
