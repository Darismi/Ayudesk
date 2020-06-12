<?php
  require 'conexion.php';
  $id_dispositivo = $_POST['dispositivo'];

  $query = mysqli_query($C_empresaInfo,"SELECT * FROM dispositivo WHERE id = '$id_dispositivo'");

  $cadena = "<label for=''>Características</label>

            <table class='table table-bordered'>
              <thead>
                <tr>
                  <th><h6> Código </h6></th>
                  <th><h6> Marca </h6></th>
                  <th><h6> Procesador </h6></th>
                  <th><h6> Memoria </h6></th>
                  <th><h6> Almacenamiento </h6></th>
                  <th><h6> SO </h6></th>
                  <th><h6> Precio </h6></th>
                  <th><h6> Tipo </h6></th>
                </tr>
              </thead>
              <tbody>";
  while ($row = $query -> fetch_row()) {
    $cadena = $cadena.'<tr><td>'.$row[1].'</td>';
    $cadena = $cadena.'<td>'.$row[2].'</td>';
    $cadena = $cadena.'<td>'.$row[3].'</td>';
    $cadena = $cadena.'<td>'.$row[4].'</td>';
    $cadena = $cadena.'<td>'.$row[5].'</td>';
    $cadena = $cadena.'<td>'.$row[6].'</td>';
    $cadena = $cadena.'<td>'.$row[7].'</td>';
    $cadena = $cadena.'<td>'.$row[8].'</td></tr>';
  }

  echo $cadena."</tbody></table>";
 ?>
