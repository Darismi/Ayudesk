
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
  <body   style="background: url(img/background.png) center center fixed">    
       <nav class="navbar navbar-light bg- mt-5 navbar navbar-dark bg-warning" style="margin-top:0%;" >
         <a class="navbar-brand" ></a>
         <a class="btn  my-2 my-sm-0" href="login_asistente.php " style="height:100%">Cerrar Sesión</a>
       </nav>
       
      <br>
      <div class="container">
        <div class="row" style="background:white;">
                  <div class="col-md-8">
                    <form>
                      <div class="form-group row">
                         <label for="" class="col-sm-4 col-form-label"><h4>Fecha del reporte:</h4></label>
                        <div class="col-sm-6">
                         <input type="text" class="form-control" id="" value="" ><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Descripcion del usuario:</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Dispositivo :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id=""><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Marca :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Procesador :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Memoria :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Almacenamiento :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label"><h4>Sistema Operativo :</h4></label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="" style="margin-right:10px;"><br>
                        </div>
                      </div>
                    </form>
                      
                       
                        
                   </div>
                    
                  
                  </div>
      <div class="row">
        <div class="col-md-6">
         <div class="form-group">
         <label for=""> <h4>Intento de autosolución </h4></label>
         <input type="text" id="inputName" class="form-control"><br>
         </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for=""> <h4>Como intento solucionarlo </h4></label>
          <input type="text" id="inputName" class="form-control">
        </div>
        </div>
      </div>    
    


      <form class="" action="" method="post">
        <select class="" id="tipo_incidente" name="tipo_incidente" required>
          <option value="0" selected >Tipo de incidente</option>
          <option value="1">Redes</option>
          <option value="2">Software</option>
          <option value="3">Hardware</option>
        </select>
        <br>
        <div class="" id="tecnico">juan lopez</div>

        <br>

        <textarea name="desc_asis" rows="8" cols="80"></textarea> <br>
        <br>
        <label for=""> <h4>Prioridad :</h4></label>
        <br>
        <div class="cold-md-6">
        <div class="form-group">
          <label for=""class="btn btn-success">
          <input type="radio" name="group" value="Baja"><h7>Baja</h7>
        </label>
        <label for="" class="btn btn-warning">
          <input type="radio" name="group" value="Media"><h7>Media</h7>
        </label>
        <label for="" class="btn btn-danger">
          <input type="radio" name="group" value="Alta"><h7>Alta</h7>
        </label>
        </div>
        </div>
        <br>
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
