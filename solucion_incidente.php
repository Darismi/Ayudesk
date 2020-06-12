
<?php
  require 'conexion.php';
  session_start();
  $query = mysqli_query($C_reportes,"SELECT * FROM reporte WHERE id = '".$_POST['id_reporte']."'");
  $row = $query -> fetch_row();

  $query2 = mysqli_query($C_empresaInfo, "SELECT * FROM dispositivo WHERE id = '".$row[5]."'");
  $row_dispo = $query2 -> fetch_row();

  $query3 = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE id = '".$row[8]."'");
  $row_usr = $query3 -> fetch_row();

  $query4 = mysqli_query($C_empresaInfo, "SELECT * FROM Usuario WHERE id = '".$row[9]."'");

  $row_ast = $query4 -> fetch_row();

  $query5 = mysqli_query($C_empresaInfo, "SELECT * FROM tecnico_perfil_tecnico where id_tecnico != '".$row[6]."' and id_perfil = '".$row[15]."'");
  //$row_5 = $query5 -> fetch_row();

  if (isset($_POST['finalizarbtn'])) {
    $query_fin = mysqli_query($C_reportes, "UPDATE `reporte` SET `descripcion_tecnico` = '".$_POST['desc_tec']."', `herramientas` = '".$_POST['herramientas']."', `estado` = 'Finalizado' WHERE `reporte`.`id` = '".$_POST['idreporte']."'");

    $query_bus_tec = mysqli_query($C_reportes, "SELECT * FROM tecnico_finalizado WHERE id_tecnico = '".$_SESSION['userid']."'");
    $nr_bus = mysqli_num_rows($query_bus_tec);

    if($nr_bus == 1){
        $row_bus = $query_bus_tec -> fetch_row();
        $suma = $row_bus[5] + 1;
        $sql = mysqli_query($C_reportes,"UPDATE `tecnico_finalizado` SET `n_finalizados` = '".$suma."' WHERE `id_tecnico` = '".$_SESSION['userid']."'");

    }else{
      $query_tecnico = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE id = '".$_SESSION['userid']."'");
      $row_tecnico = $query_tecnico -> fetch_row();
      $sql = mysqli_query($C_reportes,"INSERT INTO `tecnico_finalizado`
        (`id`, `cc`, `id_tecnico`, `nombre`, `usuario`, `n_finalizados`)
         VALUES (NULL, '".$row_tecnico[9]."', '".$_SESSION['userid']."', '".$row_tecnico[1]."', '".$row_tecnico[7]."', 1)");

    }

    header ("Location: revision_tecnico.php");
  }




  if (isset($_POST['escalarbtn'])) {
    $query_esc = mysqli_query($C_reportes, "UPDATE `reporte` SET `id_tecnico_esc` = '".$_POST['id_tecnico_esc']."', `razon` = '".$_POST['razon']."', `estado` = 'Escalonado' WHERE `reporte`.`id` = '".$_POST['idreporte']."'");

    $query_bus_tec = mysqli_query($C_reportes, "SELECT * FROM tecnico_escalado WHERE id_tecnico = '".$_SESSION['userid']."'");
    $nr_bus = mysqli_num_rows($query_bus_tec);

    if($nr_bus == 1){
        $row_bus = $query_bus_tec -> fetch_row();
        $suma = $row_bus[5] + 1;
        $sql = mysqli_query($C_reportes,"UPDATE `tecnico_escalado` SET `n_escalados` = '".$suma."' WHERE `id_tecnico` = '".$_SESSION['userid']."'");

    }else{
      $query_tecnico = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE id = '".$_SESSION['userid']."'");
      $row_tecnico = $query_tecnico -> fetch_row();
      $sql = mysqli_query($C_reportes,"INSERT INTO `tecnico_escalado`
        (`id`, `cc`, `id_tecnico`, `nombre`, `usuario`, `n_escalados`)
         VALUES (NULL, '".$row_tecnico[9]."', '".$_SESSION['userid']."', '".$row_tecnico[1]."', '".$row_tecnico[7]."', 1)");

       }
       header ("Location: revision_tecnico.php");
    }

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
       <h4>Usuario : </h4><?=$row_usr[7]?><br>
       <h4>Nombre : </h4><?=$row_usr[1]." ".$row_usr[2]." ".$row_usr[3]?><br><br>

       <?php
         if ($row[7] != NULL){
         ?>
           <h4>Descripción Técnico : </h4><?=$row[4]?><br><br>
       <?php
         }
        ?>

       <h4>usuario del asistente : </h4><?=$row_ast[7]?><br>
       <h4>Nombre del asistente : </h4><?=$row_ast[1]." ".$row_ast[2]." ".$row_ast[3]?><br><br>

       <h4>fecha del reporte : </h4><?=$row[1]?><br>
       <h4>Descripción del usuario : </h4><?=$row[2]?><br>
       <h4>Descripción del asistente : </h4><?=$row[3]?><br>

       <h4>Dispositivo : </h4><?=$row_dispo[9]?><br>
       <h4>Marca : </h4><?=$row_dispo[2]?><br>
       <h4>Prosesador : </h4><?=$row_dispo[3]?><br>
       <h4>Memoria : </h4><?=$row_dispo[4]?><br>
       <h4>Almacenamiento : </h4><?=$row_dispo[5]?><br>
       <h4>Sistema operativo : </h4><?=$row_dispo[6]?><br>

       <h4>Intento de autosolución : </h4><?=$row[10]?><br>
      <h4>Como intento solucionarlo : </h4><?=$row[11]?><br>

      <?php
        if ($row[7] == NULL){
        ?>

        <div class="container first">
          <div class="rows">
            <div class="col-6 mt-5">
              <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <h4>Escalar Reporte</h4>
                  <textarea name=razon rows="8" cols="80" placeholder="Escriba la razón del escalamiento"></textarea>
                  <div class="row">
                    <div class="col">
                      <select class="custom-select" name="id_tecnico_esc">
                        <option value="0">Seleccionar tecnico</option>
                        <?php
                          while ($row_5 = $query5 -> fetch_row()) {
                            $query6 = mysqli_query($C_empresaInfo, "SELECT * FROM usuario WHERE id = '".$row_5[0]."'");
                            $row_tec = $query6 ->fetch_row();
                          ?>
                            <option value="<?=$row_tec[0]?>"><?=$row_tec[1]." ".$row_tec[2]." ".$row_tec[3]?></option>
                          <?php
                          }
                          ?>
                      </select>
                    </div>
                    <div class="col">
                      <input type="hidden" name="idreporte" value="<?=$_POST['id_reporte']?>">
                      <input class="btn btn-dark" type="submit" name="escalarbtn" value="Escalar incidente">
                    </div>
                  </div>
              </form>
            </div>
          <?php
            }
           ?>
           <div class="col-6 mt-5">

               <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                 <h4>Finalizar Reporte</h4>
                  <textarea name="desc_tec" rows="8" cols="80" placeholder="Escriba como solucionó el incidente"></textarea>
                  <textarea name="herramientas" rows="8" cols="80" placeholder="Escriba que herramientas utilizó"></textarea>
                  <input type="hidden" name="idreporte" value="<?=$_POST['id_reporte']?>">
                  <input class="btn btn-primary" type="submit" name="finalizarbtn" value="Finalizar reporte">
               </form>

           </div>
        </div>
      </div>
     </div>
   </body>
 </html>
