

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Service Desk</title>
  </head>
  <body style="background: url(img/background.png) center center fixed">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-warning">
        <a class="navbar-brand" href="#">ServiceDesk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Soporte</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
     <section class="content">
            <div class="container-fluid" style="margin-top:10px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="card  bg-info">
                    <div class="card-header">
                      <h3 class="card-title">Registro inciendetes </h3>
                    </div>
                  </div>
                </div>
              </div>
            <div class="container"  >
              <form class="" action="captura_bd.php" method="post">
                  <div class="row" style="margin-top:20px;">
                      <div class="col-md-6">
                        <div class="form-group">
                          <h3 for="inputName" class="card-title">¿Ha intentado solucionar el problema? </h3>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <laber class = "btn btn-success">
                          <input type="radio" name="group"  value="Si"> Si
                          </laber>
                          <laber class = "btn btn-danger">
                          <input type="radio" name="group"  value="No" > No
                          </laber>
                        </div>
                      </div>
                      
                  </div>
                  
                  <div class="row" style="margin-top:10px;">
                      <div class="col-md-6">
                        <div class="form-group">
                          <h3 for="inputName" class="card-title">Descripción del problema  </h3>
                          <textarea id="inputDescription" class="form-control" rows="9"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <h4 for="inputName" class="card-title">¿Cómo ha intentado solucionar el problema?</h4>
                          <textarea id="inputDescription" class="form-control" rows="9"></textarea>
                        </div>
                      </div>
                  </div>
                  <div class="row" style="margin-top:10px;">
                      <div class="col-md-5">
                        
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <button id="inputDescription" class="btn btn-success" rows="9">Registrar incidentes</button>
                        </div>
                      </div>
                      <div class="col-md-4">
                        
                      </div>
                  </div>
              </form>
            </div>
        </section>
        
    
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src></script>
  </body>
</html>
