

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
              <a class="nav-link" href="#"> Reporte</a>
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
<!--COlumnas--->
  <div class="container" style="margin-top:10%;">
    <div class="container-fluid" >
     <div class="row align-items-start ">
       <div class="border border-dark">
        <div class="p-3 mb-2 bg-info text-white">
         <div class="row row-cols-4" >
            <div class="col-sm" class="border border-dark">Usuario</div>
            <div class="col">Nombre</div>
            <div class="col">Fecha</div>
            <div class="col">Revisar</div>
            <div class="col" >User1</div>
            <div class="col">Marcelo</div>
            <div class="col">Fecha</div>
            <div laber class="btn btn-warning" 
             input type="radio" name="group" value="Revisar"> 
            Solucion
            </div>
            <div class="col">User2</div>
            <div class="col">Santiago</div>
            <div class="col">Fecha</div>
            <div laber class="btn btn-warning" 
             input type="radio" name="group" style="margin-top:2px;" value="Revisar"> 
            Solucion
            </div>
            <div class="col">User3</div>
            <div class="col">Juan</div>
            <div class="col">Fecha</div>
            <div laber class="btn btn-warning" 
            input type="radio" name="group" style="margin-top:2px;" value="Revisar"> 
            Solucion
            </div>
          </div>
         </div>
       </div> 
     </div>
            <div laber class="btn btn-warning" 
             input type="radio" name="group" style="margin-top:2px;" value="Revisar"> 
            Actualizacion
          </laber>
          </div>
    </div>
</div>
           
  </body>
</html>
