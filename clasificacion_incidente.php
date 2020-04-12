<?php
  require 'conexion.php';
  $query = mysqli_query($C_reportes, "SELECT * FROM reporte WHERE id = '".$_POST['id_reporte']."';");

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

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>

  </head>
  <body>
    <?php
      $row = $query -> fetch_row();
      $query2 = mysqli_query($C_empresaInfo, "SELECT * FROM dispositivo WHERE id = '".$row[5]."'");
      $row_dispo = $query2 -> fetch_row();
     ?>

     <div class="container">
       <nav class="navbar navbar-light bg- mt-5">
         <a class="navbar-brand"></a>
         <a class="btn  my-2 my-sm-0" href="login_asistente.php">Cerrar Sesión</a>
       </nav>

       <label for="">fecha del reporte: </label><?=$row[1]?><br>
       <label for="">Descripción del usuario: </label><?=$row[2]?><br>

       <label for="">dispositivo: </label><?=$row_dispo[9]?><br>
       <label for="">Marca: </label><?=$row_dispo[2]?><br>
       <label for="">prosesador: </label><?=$row_dispo[3]?><br>
       <label for="">memoria: </label><?=$row_dispo[4]?><br>
       <label for="">almacenamiento: </label><?=$row_dispo[5]?><br>
       <label for="">sistema operativo: </label><?=$row_dispo[6]?><br>

       <label for="">intento de autosolución</label><?=$row[10]?><br>
      <label for="">como intento solucionarlo</label><?=$row[11]?><br>


      <form class="" action="" method="post">
        <select class="" id="tipo_incidente" name="tipo_incidente" required>
          <option value="0" selected >Tipo de incidente</option>
          <option value="1">Redes</option>
          <option value="2">Software</option>
          <option value="3">Hardware</option>
        </select>

        <div class="" id="tecnico"></div>

        <br>

        <textarea name="desc_asis" rows="8" cols="80"></textarea> <br>

        <label for="">prioridad</label><br>
        <label for="">Baja</label>
        <input type="radio" name="group" value="Baja">
        <label for="">Media</label>
        <input type="radio" name="group" value="Media">
        <label for="">Alta</label>
        <input type="radio" name="group" value="Alta"><br>

        <input class="btn btn-primary" type="submit" name="" value="Asignar Incidente">
      </form>
     </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    recargarLista();

    $('#tipo_incidente').change(function(){
      recargarLista();
    });
  });
</script>

<script type="text/javascript">
  function recargarLista(){
    $.ajax({
      type:"POST",
      url:"datos.php",
      data:"incidente=" + $('#tipo_incidente').val(),
      success:function(r){
        $('#tecnico').html(r);
      }
    })
  }
</script>
