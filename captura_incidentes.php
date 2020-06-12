<?php
  require 'conexion.php';
  session_start();
  if (isset($_POST['buscarbtn'])) {
    $query1 = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE cc ='".$_POST['cedulatxt']."'");
    $row1 = $query1 -> fetch_row();
    $usuario = $row1[0];
    $query = mysqli_query($C_empresaInfo, "SELECT * FROM dispositivo WHERE id_usuario = '".$row1[0]."'");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Service Desk</title>
    <script
      src="js/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>

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

      <h1 class="mt-5">Reporte de incidente</h1>

        <div class="mt-5 bg-light">
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="cedulatxt" value="" placeholder="Cédula" required>
            <input type="submit" class="btn btn-primary" name="buscarbtn" value="Buscar">
            <br>
          </form>

          <form class="" action="captura_bd.php" method="post">
            <input type="hidden" name="id_usuario" value="<?=$usuario?>">

            <div class="row">
              <div class="col-6">
                <label class="mt-5" for="">Dispositivo afectado</label>
                <select class="custom-select .col-" name="dispositivo" id="id_maquina" required>
                  <option value="value1" selected >Dispositivo</option>
                  <?php
                    while ($row = $query -> fetch_row()) {
                    ?>
                      <option value="<?=$row[0]?>"><?=$row[2]?></option>
                    <?php
                    }
                    ?>
                </select>
              </div>
                <div class="mt-5" id="hojadevida"></div>
            </div>




            <br>
            <br>
            <h2 class="mt-5">¿Qué problema presenta?</h2>
            <textarea placeholder="Escriba detalladamente" name="problema" rows="10" cols="70" required></textarea>
            <br>
            <br>

            <h2>¿Ha intentado solucionar el problema?</h2>
            <br>
            <label for="">Sí</label>
            <input type="radio" name="group" value="Si">
            <label for="">No</label>
            <input type="radio" name="group" value="No">
            <br>
            <br>
            <h2>¿Cómo ha intentado solucionar el problema?</h2>
            <textarea placeholder="Escriba detalladamente" name="intento" rows="10" cols="70"></textarea>
            <br>
            <br>


            <div class="row mt-5">
              <div class="col-4">
                <label for="">Tipo de incidente</label>
                <select class="custom-select" id="tipo_incidente" name="tipo_incidente" required>
                  <option value="0" selected ></option>
                  <option value="1">Hardware</option>
                  <option value="2">Software</option>
                  <option value="3">Redes</option>
                </select>
              </div>
              <div class="col-5">
                <div class="ml-5" id="tecnico"></div>
              </div>

            </div><br>
            <textarea class="mt-5" name="desc_asis" rows="8" cols="80" placeholder="Escribe detalladamente el incidente de modo que sea fácil de interpretar por el técnico"></textarea> <br>

            <label for="" class="mt-3">prioridad</label><br>
            <label for="">Baja</label>
            <input type="radio" name="prioridad" value="Baja">
            <label for="" class="ml-5">Media</label>
            <input type="radio" name="prioridad" value="Media">
            <label for="" class="ml-5">Alta</label>
            <input type="radio" name="prioridad" value="Alta"><br>
            <input type="submit" class="btn btn-primary mt-5" placeholder="Reportar" value="Reportar" name="reportarbtn">
          </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js" charset="utf-8"></script>
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




<script type="text/javascript">
  $(document).ready(function(){
    cargarHoja();

    $('#id_maquina').change(function(){
      cargarHoja();
    });
  });
</script>

<script type="text/javascript">
  function cargarHoja(){
    $.ajax({
      type:"POST",
      url:"datos2.php",
      data:"dispositivo=" + $('#id_maquina').val(),
      success:function(r){
        $('#hojadevida').html(r);
      }
    })
  }
</script>
