<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "clientes";

    $conexion = mysqli_connect('localhost', 'alex', '123', 'tienda');
    $solicitud = "


    
    ";
    $resultado = mysqli_query($conexion, $solicitud);

    while($uno = mysqli_fetch_array($resultado)){
        echo $uno['nombre'] . $uno['apellido'];
    }
    

?>