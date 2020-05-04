<?php
    require "conexion.php";
    session_start();
    $usuario = $_POST["txtUsuario"];
    $contraseña = $_POST["txtContraseña"];

    $query = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE usuario = '".$usuario."' and contraseña = '".$contraseña."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1){
      $row = $query -> fetch_row();
      $_SESSION['userid'] = $row[0];
      $_SESSION['username'] = $usuario;

      if($row[10] == 1 || $row[10] == 2){
          //es usuario
          header("Location: mis_reportes.php");
      }else if($row[10] == 3){
        //es asistente
        header("Location: captura_incidentes.php");
      }else if($row[10] == 4){
        //es tecnico
        header("Location: revision_tecnico.php");
      }
    }else{
      header("Location: index.php");
    }

 ?>
