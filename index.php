<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">

    <style>
      .user-img{
        margin-top: -15px;
        margin-bottom: 35px;
      }

      .user-img img{
        width: 100px;
        height: 100px;
        border-radius: 180em;
        border-style: solid;
      }

      .main-section{
        margin:0 auto;
        margin-top:25%;
        padding:0;
      }

      .modal-content{
        background-color: #3b4652;
        opacity: .95;
        padding: 0 20px;
        box-shadow: 0px 0px 3px #848484;
      }


      .user-img img{
        width: 100px;
        height: 100px;
      }
    </style>


    <title>Ayudesk</title>
  </head>
  <body style="background: url(img/background.png) center center fixed">
    <center>
      <div class="modal-dialog center">
        <div class="col-sm-8 main-section">
          <div class="modal-content">
            <div class="col-12 user-img" >
              <img src="img/user_icon.png">
            </div>
            <form class="col-12" action="captura_incidentes.php" method="post">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="nombre de usuario" name="txtUsuario">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="contraseña" name="txtContraseña">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" placeholder="Ingresar" name="btnIngresar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </center>
  </body>
</html>
