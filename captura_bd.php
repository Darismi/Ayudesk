<?php
  require 'conexion.php';
  session_start();
  $fecha = date("Y/m/d");

  $query = mysqli_query($C_reportes, "INSERT INTO `reporte`
    (`id`, `fecha`, `descripcion_usuario`, `descripcion_asistente`, `descripcion_tecnico`, `id_dispositivo`, `id_tecnico`, `id_tecnico_esc`, `id_usuario`, `id_asistente`, `autoSolu`, `autoSolu_Descripcion`, `estado`, `fecha_Solu`,`prioridad`,`tipo`,`herramientas`,`razon`,`finalizado`)
    VALUES (NULL, '".$fecha."', '".$_POST['problema']."','".$_POST['desc_asis']."', NULL, '".$_POST['dispositivo']."', '".$_POST['id_tecnico']."', NULL, '".$_POST['id_usuario']."','".$_SESSION['userid']."','".$_POST['group']."', '".$_POST['intento']."', 'Pendiente', NULL, '".$_POST['prioridad']."', '".$_POST['tipo_incidente']."', NULL, NULL, NULL);");

    //querys para aumentar la suma de reportes

    $query_buscar = mysqli_query($C_reportes, "SELECT * FROM usuario_reportes WHERE id_usuario = '".$_POST['id_usuario']."'");
    $nr_buscar = mysqli_num_rows($query_buscar);


    if ($nr_buscar == 1) {
      $row_buscar = $query_buscar -> fetch_row();
      $suma = $row_buscar[5] + 1;
      $sql = mysqli_query($C_reportes,"UPDATE `usuario_reportes` SET `n_reportes` = '".$suma."' WHERE `id_usuario` = '".$_POST['id_usuario']."'");
    }else{
      $query_usuario = mysqli_query($C_empresaInfo, "SELECT * FROM `usuario` WHERE id = '".$_POST['id_usuario']."'");
      $row_usuario = $query_usuario -> fetch_row();
      $sql = mysqli_query($C_reportes,"INSERT INTO `usuario_reportes`
        (`id`, `cc`, `id_usuario`, `nombre`, `usuario`, `n_reportes`)
         VALUES (NULL, '".$row_usuario[9]."', '".$_POST['id_usuario']."', '".$row_usuario[1]."', '".$row_usuario[7]."', 1)");
    }

    header ("Location: captura_incidentes.php");

 ?>
