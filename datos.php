<?php
  require 'conexion.php';
  $incidente = $_POST['incidente'];

  $query = mysqli_query($C_empresaInfo,"SELECT * FROM tecnico_perfil_tecnico WHERE id_perfil = '$incidente'");

  $cadena = "<select id='tecnico' class='' required>";

  while ($row = $query -> fetch_row()) {
    $query2 = mysqli_query($C_empresaInfo,"SELECT * FROM tecnico WHERE id = '".$row[0]."'");
    $row_tec = $query2 -> fetch_row();
    $nomb_tec = $row_tec[1]." ".$row_tec[3]." ".$row_tec[4];
    $cadena = $cadena.'<option value='.$row[0].'>'.utf8_encode($nomb_tec).'</option>';
  }

  echo $cadena."</select>";
 ?>
