<?php
  require 'conexion.php';
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
      <div class="row">
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
            labels:['col1', 'col2', 'col3'],
            datasets:[{
              label:'num datos',
              data:[10,9,15],
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
