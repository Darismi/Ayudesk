<?php
  require 'conexion.php';

  $query_redes = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '3'");
  $nr_1 = mysqli_num_rows($query_redes);
  $query_software = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '2'");
  $nr_2 = mysqli_num_rows($query_software);
  $query_hardware = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '1'");
  $nr_3 = mysqli_num_rows($query_hardware);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Service Desk</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="wigth=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="estadisticas.php">Estadísticas</a>
           </li>
          </ul>
        </div>
          <a class="navbar-brand"></a>
          <a class="btn my-2 my-sm-0" href="cerrar_session.php">Cerrar Sesión</a>
      </nav>
      <div class="row mt-5">
        <div class="col-xs-5 col-md-5">
          <h1>Incidente mas común</h1>
          <canvas id="myChart" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
  </body>

      <script>
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx,{
          type:"pie",
          data: {
            labels:['Redes', 'Software', 'Hardware'],
            datasets:[{
              label:'num datos',
              data:[<?=$nr_1?>,<?=$nr_2?>,<?=$nr_3?>],
              backgroundColor:[
                'rgb(66, 134, 244)',
                'rgb(74, 135, 72)',
                'rgb(229, 89, 50)'
              ]
            }]
          },
          options:{
            scales:{
              yAxes:[{
                ticks:{
                  beginAtZero:true
                }
              }]
            }
          }
        });
      </script>
</html>
