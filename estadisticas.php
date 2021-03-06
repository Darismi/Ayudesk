<?php
  require 'conexion.php';

  //querys para sacar estadisticas de incidente mas comun
  $query_redes = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '3'");
  $nr_1 = mysqli_num_rows($query_redes);
  $query_software = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '2'");
  $nr_2 = mysqli_num_rows($query_software);
  $query_hardware = mysqli_query($C_reportes,"SELECT * FROM reporte where tipo = '1'");
  $nr_3 = mysqli_num_rows($query_hardware);

  //querys para estadisticas de cantidad de reportes por usuarios

  //$row_cru = $query_cru -> fetch_row();



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
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link active" href="estadisticas.php">Estadísticas</a>
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
      <div class="row mt-5">
        <div class="col-xs-5 col-md-5">
          <h1>Incidente mas común</h1>
          <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <div class="col-xs-5 col-md-5 ml-5">
          <h1 class="">Reportes de usuarios</h1>
          <canvas id="myChart2" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-xs-5 col-md-5">
          <h1>Técnico que mas resuelve incidentes</h1>
          <canvas id="myChart3" width="400" height="400"></canvas>
        </div>
        <div class="col-xs-5 col-md-5 ml-5">
          <h1>Técnico que mas escalona incidentes</h1>
          <canvas id="myChart4" width="400" height="400"></canvas>
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

      <script>

        var ctx = document.getElementById("myChart2").getContext("2d");
        var myChart = new Chart(ctx,{
          type:"bar",
          data: {
            labels:[
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM usuario_reportes");
            while ($row_cru = $query_cru -> fetch_row())
            {
            ?>
                '<?php echo $row_cru[3];?>',
            <?php
            }
            ?>
            ],
          datasets:[{
            label:'numero de reportes',
            data:
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM usuario_reportes");
            ?>
            [<?php while ($row_cru = $query_cru -> fetch_row()) { ?><?php echo $row_cru[5] ?>,
              <?php }?>],


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

      <script>

        var ctx = document.getElementById("myChart3").getContext("2d");
        var myChart = new Chart(ctx,{
          type:"bar",
          data: {
            labels:[
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM tecnico_finalizado");
            while ($row_cru = $query_cru -> fetch_row())
            {
            ?>
                '<?php echo $row_cru[3];?>',
            <?php
            }
            ?>
            ],
          datasets:[{
            label:'numero de reportes',
            data:
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM tecnico_finalizado");
            ?>
            [<?php while ($row_cru = $query_cru -> fetch_row()) { ?><?php echo $row_cru[5] ?>,
              <?php }?>],


              backgroundColor:[
                'rgba(109, 133, 189)',
                'rgba(120, 99, 132)',
                'rgb(0, 99, 132)'
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

      <script>

        var ctx = document.getElementById("myChart4").getContext("2d");
        var myChart = new Chart(ctx,{
          type:"bar",
          data: {
            labels:[
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM tecnico_escalado");
            while ($row_cru = $query_cru -> fetch_row())
            {
            ?>
                '<?php echo $row_cru[3];?>',
            <?php
            }
            ?>
            ],
          datasets:[{
            label:'numero de reportes',
            data:
            <?php
            $query_cru = mysqli_query($C_reportes,"SELECT * FROM tecnico_escalado");
            ?>
            [<?php while ($row_cru = $query_cru -> fetch_row()) { ?><?php echo $row_cru[5] ?>,
              <?php }?>],


              backgroundColor:[
                'rgba(136, 210, 247)',
                'rgba(136, 169, 247)',
                'rgb(109, 133, 189)'
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
