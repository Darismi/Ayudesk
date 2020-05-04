
<?php
  require 'conexion.php';
  $query = mysqli_query($C_reportes,"SELECT * FROM reporte WHERE id = '".$_POST['id_reporte']."'");
  $row = $query -> fetch_row();

  $query2 = mysqli_query($C_empresaInfo, "SELECT * FROM dispositivo WHERE id = '".$row[5]."'");
  $row_dispo = $query2 -> fetch_row();

  $query3 = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE id = '".$row[8]."'");
  $row_usr = $query3 -> fetch_row();

  $query4 = mysqli_query($C_empresaInfo, "SELECT * FROM Usuario WHERE id = '".$row[9]."'");

  $row_ast = $query4 -> fetch_row();
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
     <title></title>
   </head>
   <body>
     <div class="container">
       <nav class="navbar navbar-light bg- mt-5">
         <a class="navbar-brand"></a>
         <a class="btn  my-2 my-sm-0" href="cerrar_session.php">Cerrar Sesión</a>
       </nav>
       <label for="">usuario : </label><?=$row_usr[1]?><br>
       <label for="">Nombre : </label><?=$row_usr[2]." ".$row_usr[4]." ".$row_usr[5]?><br><br>

       <?php
         if ($row[7] != NULL){
         ?>
           <label for="">Descripción Técnico : </label><?=$row[4]?><br><br>
       <?php
         }
        ?>

       <label for="">usuario del asistente : </label><?=$row_ast[1]?><br>
       <label for="">Nombre del asistente : </label><?=$row_ast[3]." ".$row_ast[5]." ".$row_ast[6]?><br><br>

       <label for="">fecha del reporte : </label><?=$row[1]?><br>
       <label for="">Descripción del usuario : </label><?=$row[2]?><br>
       <label for="">Descripción del asistente : </label><?=$row[3]?><br>

       <label for="">dispositivo : </label><?=$row_dispo[9]?><br>
       <label for="">Marca : </label><?=$row_dispo[2]?><br>
       <label for="">prosesador : </label><?=$row_dispo[3]?><br>
       <label for="">memoria : </label><?=$row_dispo[4]?><br>
       <label for="">almacenamiento : </label><?=$row_dispo[5]?><br>
       <label for="">sistema operativo : </label><?=$row_dispo[6]?><br>

       <label for="">intento de autosolución : </label><?=$row[10]?><br>
      <label for="">como intento solucionarlo : </label><?=$row[11]?><br>

      <?php
        if ($row[7] == NULL){
        ?>
          <button class="btn btn-dark" type="button" name="button">Escarlar incidente</button>
      <?php
        }
       ?>
      <form class="" action="index.html" method="post">
          <input class="btn btn-primary mt-5" type="submit" name="" value="Finalizar reporte">
      </form>

     </div>
   </body>
 </html>
