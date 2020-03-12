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
      </center>

      <h2>Dispositivo afectado</h2>
      <select name="select">
        <option value="value1" selected >Dispositivo</option>
        <option value="value2">Lenovo</option>
        <option value="value3" >Asus</option>
        <option value="value4">Acer</option>
      </select>
      <br>
      <br>
      <h2>¿Qué problema presenta?</h2>
      <input type="text" name="" value="" style="width:500px; height:150px;" class="form-control">
      <br>
      <br>
      <form class="" action="index.html" method="post">
        <h2>¿Ha intentado solucionar el problema?</h2>
        <br>
        <h3>Sí</h3>
        <input type="radio" name="" value="Sí">
        <br>
        <h3>No</h3>
        <input type="radio" name="" value="No">
        <br>
        <br>
        <h2>¿Cómo ha intentado solucionar el problema?</h2>
        <input type="text" name="" value="" style="width:500px; height:150px;" class="form-control">
        <br>
        <br>
        <input type="button" name="" value="Enviar" class="btn btn-default">
      </form>
    </div>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
