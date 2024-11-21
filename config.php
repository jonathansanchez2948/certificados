<?php
    $db_host="localhost";
    //$db_usuario="flisolmedellin_usr_db";
    //$db_password="3xn7T4xTZxPyd0hV";
    $db_usuario="root";
    $db_password="";
    $db_nombre="flisolmedellin_db_wp_flisol";
    $conexion = @mysqli_connect($db_host, $db_usuario, $db_password) or die(mysqli_error($conexion));
    $db = @mysqli_select_db($conexion, $db_nombre) or die(mysqli_error($conexion));
?> 
