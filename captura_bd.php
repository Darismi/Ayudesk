<?php
  require 'conexion.php';
  session_start();
  $fecha = date("Y/m/d");

  $query = mysqli_query($C_reportes, "INSERT INTO `reporte`
    (`id`, `fecha`, `descripcion_usuario`, `descripcion_asistente`, `descripcion_tecnico`, `id_dispositivo`, `id_tecnico`, `id_tecnico_esc`, `id_usuario`, `id_asistente`, `autoSolu`, `autoSolu_Descripcion`, `estado`, `fecha_Solu`,`prioridad`)
     VALUES (NULL, '".$fecha."', '".$_POST['problema']."', NULL, NULL, '".$_POST['dispositivo']."', NULL, NULL, '".$_SESSION['idusuario']."', NULL, '".$_POST['group']."', '".$_POST['intento']."', 'Pendiente', NULL, NULL);");

    header ("Location: captura_incidentes.php");
 ?>
