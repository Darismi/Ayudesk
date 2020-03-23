<?php
  require 'conexion.php';
  $query = mysqli_query($Conexion, "SELECT * FROM reporte where estado = 'Pendiente'");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Desk</title>
  </head>
  <body>
    <div class="container">
      <table>
        <th>
          <td>
            <h2>Usuario</h2>
          </td>
          <td>
            <h2>Nombre</h2>
          </td>
          <td>
            <h2>Fecha</h2>
          </td>
        </th>
        <?php
        while ($row = $query->fetch_row()) {

        ?>
          <tr>
            <td></td>
            <td>User1</td>
            <td>Marcelo</td>
            <td><?=$row[1]?></td>
            <td>
              <form class="" action="" method="post">
                  <input type="submit" value="Revisar" class="btn">
              </form>
            </td>
          </tr>
          <?php
        }
         ?>

      </table>
    </div>
  </body>
</html>
