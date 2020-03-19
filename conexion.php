<?php

    $Host = "localhost";
    $User = "root";
    $Password = "";
    $DB = "servicedeskdb";

    $Conexion = mysqli_connect($Host,$User,$Password,$DB);

    if($Conexion){
        //echo "conexión exitosa";
    }else{
        echo "no se pudo conectar a la base de datos";
    }
?>
