<?php
  require 'conexion.php';
  session_start();
  $query = mysqli_query($C_reportes,"SELECT * FROM reporte WHERE id_tecnico = '".$_SESSION['userid']."' and id_tecnico_esc is NULL and `estado` != 'Finalizado'");
  $query2 = mysqli_query($C_reportes,"SELECT * FROM reporte WHERE id_tecnico_esc = '".$_SESSION['userid']."' and `estado` != 'Finalizado'");

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
      <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="estadisticas.php">Estadísticas</a>
           </li>
          </ul>
          <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="faq.html" target="_blank">FAQ</a>
           </li>
          </ul>
        </div>
          <a class="navbar-brand"></a>
          <a class="btn my-2 my-sm-0" href="cerrar_session.php">Cerrar Sesión</a>
      </nav>

      <div class="container first">
        <div class="row mt-5">
          <div class="col">
            <h4>Incidentes</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <tr>
                    <th><h4> Fecha </h4></th>
                    <th><h4> Descripción </h4></th>
                    <th><h4> Prioridad </h4></th>
                    <th><h4> </h4></th>
                  </tr>
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




          <div class="col">
            <h4>Escalonados</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><h4> Fecha </h4></th>
                  <th><h4> Descripción </h4></th>
                  <th><h4> Prioridad </h4></th>
                  <th><h4> </h4></th>
                </tr>
              </thead>
               <tbody>
                 <?php
                 while ($row2 = $query2->fetch_row()) {
                 ?>
                   <tr>
                     <td ><?=$row2[1]?></td>
                     <td ><?=$row2[2]?></td>
                     <td><?=$row2[14]?></td>
                     <td>
                       <form class="ml-5" action="solucion_incidente.php" method="post">
                         <input type="hidden" name="id_reporte" value="<?=$row2[0]?>">
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
      </div>
      </div>




    </div>
  </body>
</html>
