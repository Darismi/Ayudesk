<?php
  require 'conexion.php';
  session_start();
  $fecha = date("Y/m/d");

  $query = mysqli_query($Conexion, "INSERT INTO `reporte`
    (`id_reporte`, `fecha`, `descripcion_usuario`, `descripcion_asistente`, `descripcion_tecnico`, `iddispositivo`, `idtecnico`, `idusuario`, `idasistente`, `autoSolu`, `autoSoluDescripcion`, `estado`)
     VALUES (NULL, '".$fecha."', '".$_POST['problema']."', NULL, NULL, '".$_POST['dispositivo']."', NULL, '".$_SESSION['idusuario']."', NULL, '".$_POST['group']."', '".$_POST['intento']."', 'Pendiente');");

     //header ("Location: captura_incidentes.php");
 ?>
