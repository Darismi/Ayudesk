<?php
  require 'conexion.php';
  session_start();

  if ($_POST['tipo_incidente'] == 1){
    $tipo_incidente = "Redes";
  }else if ($_POST['tipo_incidente'] == 3) {
    $tipo_incidente = "Hardware";
  }else if ($_POST['tipo_incidente'] == 4) {
    $tipo_incidente = "Software";
  }

  $query = mysqli_query($C_reportes,"UPDATE reporte SET descripcion_asistente = '".$_POST['desc_asis']."',
    id_tecnico = '".$_POST['id_tecnico']."',
    id_asistente = '".$_SESSION['idasistente']."',
    estado = 'En revisión',
    prioridad = '".$_POST['group']."',
    tipo = '".$tipo_incidente."' WHERE reporte.id = '".$_POST['id_reporte']."'");
 ?>
