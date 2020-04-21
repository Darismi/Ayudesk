<?php
    require "conexion.php";
    session_start();
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($C_empresaInfo, "SELECT * FROM tecnico where usuario = '".$usuario."' and contraseña ='".$contraseña."'");
    $nr = mysqli_num_rows($query);
    $row = $query -> fetch_row();

    $_SESSION['idtecnico'] = $row[0];
    $_SESSION['usr'] = $usuario;

    if ($nr == 1) {
      echo "hola";
      header("Location: solucion_incidente.php");
    }else if ($nr == 0){
      header("Location: login_tecnico.php");
    }
 ?>
