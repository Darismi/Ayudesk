<?php
  require 'conexion.php';
  $incidente = $_POST['incidente'];

  $query = mysqli_query($C_empresaInfo,"SELECT * FROM tecnico_perfil_tecnico WHERE id_perfil = '$incidente'");

  $cadena = "<label for=''>Tecnico</label>

            <select id='tecnico' class='custom-select' name='id_tecnico' required>";
  while ($row = $query -> fetch_row()) {
    $query2 = mysqli_query($C_empresaInfo,"SELECT * FROM usuario WHERE id = '".$row[0]."'");
    $row_tec = $query2 -> fetch_row();
    $nomb_tec = $row_tec[1]." ".$row_tec[2]." ".$row_tec[3];
    $cadena = $cadena.'<option value='.$row_tec[0].'>'.utf8_encode($nomb_tec).'</option>';
  }

  echo $cadena."</select>";
 ?>
