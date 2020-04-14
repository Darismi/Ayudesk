<?php
  require 'conexion.php';
  $query = mysqli_query($C_reportes, "SELECT * FROM reporte where estado = 'Pendiente'");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">

    <title>Service Desk</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light bg- mt-5">
        <a class="navbar-brand"></a>
        <a class="btn  my-2 my-sm-0" href="login_asistente.php">Cerrar Sesión</a>
      </nav>
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <th><h2> Usuario </h2></th>
            <th><h2> Nombre </h2></th>
            <th><h2> Fecha </h2></th>
            <th><h2></h2></th>
          </tr>
        </thead>
         <tbody>
           <?php
           while ($row = $query->fetch_row()) {
             $query2 = mysqli_query($C_empresaInfo, "SELECT * FROM usuario where id = '".$row[8]."'");
             $row_usr = $query2->fetch_row();
             $nombre = $row_usr[2] ." ". $row_usr[4] ." ". $row_usr[5];
           ?>

             <tr>
               <td ><?=$row_usr[10]?></td>
               <td><?=$nombre?></td>
               <td><?=$row[1]?></td>
               <td>
                 <center>
                   <form class="" action="clasificacion_incidente.php" method="post">
                     <input type="hidden" name="id_reporte" value="<?=$row[0]?>">
                     <input type="submit" value="Revisar" class="btn btn-primary">
                   </form>
                 </center>
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
