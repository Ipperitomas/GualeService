<?php
    try {
        $base = new PDO('mysql:host=localhost; dbname=emprendimientos','root','');
        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base -> exec("SET CHARACTER SET UTF8");
        echo "CONECTADO";
    } catch (Exception $E) {
        die('Error'. $E->getMessage());
        echo "Linea de error" . $E->getLine();
    }
?>