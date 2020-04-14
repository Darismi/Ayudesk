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

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>

  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Reportar incidente <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="mis_reportes.php">Mis reportes <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <a class="navbar-brand"></a>
        <a class="btn  my-2 my-sm-0" href="login_asistente.php">Cerrar Sesión</a>
      </nav>

      <h1 class="mt-5">Reporte de incidente</h1>

        <div class="mt-5 bg-light">

          <form class="" action="captura_bd.php" method="post">
            <label for="">Dispositivo afectado</label>
            <select class="custom-select .col-" name="dispositivo" required>
              <option value="value1" selected >Dispositivo</option>
              <?php
                while ($row = $query -> fetch_row()) {
                ?>
                  <option value="<?=$row[0]?>"><?=$row[2]?></option>
                <?php
                }
                ?>
            </select>

            <table class="table table-bordered mt-5">
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
            <input type="submit" class="btn btn-primary" placeholder="Reportar" value="Reportar" name="btnIngresar">
          </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
