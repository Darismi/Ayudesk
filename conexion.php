<?php

    $C_empresaInfo = mysqli_connect("localhost","root","","empresainfor");

    $C_reportes = mysqli_connect("localhost","root","","reportesayudesk");

    if($C_empresaInfo && $C_reportes){
        //echo "conexión exitosa";
    }else{
        echo "no se pudo conectar a la base de datos";
    }
?>
