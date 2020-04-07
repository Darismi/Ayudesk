<?php
  require 'conexion.php';
  session_start();
  $query = mysqli_query($C_empresaInfo, "SELECT * FROM dispositivo WHERE id_usuario = '".$_SESSION['idusuario']."'");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Service Desk</title>
  </head>
  <body>
    <div class="container">
      <center>
        <h1>Reporte de incidente</h1>


      <form class="" action="captura_bd.php" method="post">
        <h2>Dispositivo afectado</h2>
        <select name="dispositivo" required>
          <option value="value1" selected >Dispositivo</option>
          <?php
            while ($row = $query -> fetch_row()) {
            ?>
              <option value="<?=$row[0]?>"><?=$row[2]?></option>
            <?php
            }
            ?>
        </select>

        <table class="table table-bordered" style="margin-top: 50px;">
          <th>
            <td>
              <h5>Dispositivo</h5>
            </td>
            <td>
              <h5>Marca</h5>
            </td>
            <td>
              <h5>Procesador</h5>
            </td>
            <td>
              <h5>Memoria</h5>
            </td>
            <td>
              <h5>Almacenamiento</h5>
            </td>
            <td>
              <h5>sistema operativo</h5>
            </td>
          </th>
        </table>

        <br>
        <br>
        <h2>¿Qué problema presenta?</h2>
        <textarea placeholder="Escriba detalladamente" name="problema" rows="10" cols="70" required></textarea>
        <br>
        <br>

        <h2>¿Ha intentado solucionar el problema?</h2>
        <br>
        <h3>Sí</h3>
        <input type="radio" name="group" value="Si">
        <h3>No</h3>
        <input type="radio" name="group" value="No">
        <br>
        <br>
        <h2>¿Cómo ha intentado solucionar el problema?</h2>
        <textarea placeholder="Escriba detalladamente" name="intento" rows="10" cols="70"></textarea>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" placeholder="Reportar" value="Reportar" name="btnIngresar">
      </form>
    </div>
    </center>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
