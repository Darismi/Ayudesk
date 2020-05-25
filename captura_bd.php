<?php
  require 'conexion.php';
  session_start();
  $fecha = date("Y/m/d");

  $query = mysqli_query($C_reportes, "INSERT INTO `reporte`
    (`id`, `fecha`, `descripcion_usuario`, `descripcion_asistente`, `descripcion_tecnico`, `id_dispositivo`, `id_tecnico`, `id_tecnico_esc`, `id_usuario`, `id_asistente`, `autoSolu`, `autoSolu_Descripcion`, `estado`, `fecha_Solu`,`prioridad`,`tipo`,`herramientas`,`razon`,`finalizado`)
    VALUES (NULL, '".$fecha."', '".$_POST['problema']."','".$_POST['desc_asis']."', NULL, '".$_POST['dispositivo']."', '".$_POST['id_tecnico']."', NULL, '".$_POST['id_usuario']."','".$_SESSION['userid']."','".$_POST['group']."', '".$_POST['intento']."', 'Pendiente', NULL, '".$_POST['prioridad']."', '".$_POST['tipo_incidente']."', NULL, NULL, NULL);");

    header ("Location: captura_incidentes.php");
 ?>
