<?php
  $db_host = "localhost";
  $db_nombre = "emprendimientos";
  $db_usuario ="root";
  $db_contraseña = "";
  $Conexion = mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
    if(mysqli_connect_errno()){
        echo "No se pudo conectar con la BD <br>";
        exit();
    }else{
       // echo "Conexion Exitosa <br>";
       // echo $busqueda;
    }
  ?>