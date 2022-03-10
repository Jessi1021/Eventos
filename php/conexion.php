<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $BD="andic";

    ///Conexion y campos
    $conexion = mysqli_connect ($servidor, $usuario, $password, $BD);

    ///Verificacion de conexion 
    if (!$conexion)  
    {
        echo "Fallo <br>";
        die ("connection failed: " . mysqli_connect_error());
    
    } 
    else{
       // echo "Conexión exitosa";
    }

?>