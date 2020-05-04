<?php
  require 'conexion.php';
  session_start();
  $query = mysqli_query($C_reportes,"SELECT * FROM reporte WHERE id_tecnico = '".$_SESSION['userid']."'");
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <meta charset="utf-8">
    <title>Service Desk</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light bg- mt-5">
        <a class="navbar-brand"></a>
        <a class="btn  my-2 my-sm-0" href="cerrar_session.php">Cerrar Sesión</a>
      </nav>
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <th><h2> Fecha </h2></th>
            <th><h2> Descripción </h2></th>
            <th><h2> Prioridad </h2></th>
            <th><h2> </h2></th>
          </tr>
        </thead>
         <tbody>
           <?php
           while ($row = $query->fetch_row()) {
           ?>
             <tr>
               <td ><?=$row[1]?></td>
               <td ><?=$row[2]?></td>
               <td><?=$row[14]?></td>
               <td>
                 <form class="ml-5" action="solucion_incidente.php" method="post">
                   <input type="hidden" name="id_reporte" value="<?=$row[0]?>">
                   <input class="btn btn-primary" type="submit" name="" value="Revisar">
                 </form>
               </td>
             </tr>
             <?php
           }
            ?>
          </tbody>
       </table>
    </div>
  </body>
</html>
