<?php
    ///llamar a otro archivo php
    include("conexion.php");
    ///Capturar valores, post captura el valor  del (formulario)
    $nombre    = $_POST["nombre"];
    $apa       = $_POST["apa"];
    $ama       = $_POST["ama"];
    $gmail     = $_POST["gmail"];
    $edad      = $_POST["edad"];
    $pais      = $_POST["pais"];
    $ciudad    = $_POST["ciudad"];
    $si        = $_POST[""];
    $no        = $_POST["no"];
    $talvez    = $_POST["talvez"];
    $desc_idea = $_POST["desc_idea"];  
    $tel       = $_POST["tel"];
/*
if($_POST['si'] == "si"){
    $respuesta= "si";
}
elseif ($_POST['no'] == "no"){
    $respuesta = "no";
}
else{
    $respuesta = "talvez";
}*/

$checkbox=$_POST['check'];
foreach($checkbox as $llave => $valor ){
    $respuesta = " $valor";
    

}


    ///Verificacion de usuarios ya existentes o no
    $consultaId = "SELECT gmail 
    FROM evento_mujeres  
    WHERE gmail = '$gmail' ";
    ///Devuelve el objeto con l resultado, false = error, true = ejecucion

$consultaId = mysqli_query ($conexion, $consultaId);  //query =consulta
$consultaId = mysqli_fetch_array ($consultaId); //fetch = extrae

if (!$consultaId)
{ //Si la consulta esta vacia, inserta nuevo 

$sql = "INSERT INTO evento_mujeres VALUES ('','$nombre', '$apa','$ama','$gmail','$edad','$pais','$ciudad','$desc_idea','$tel','$respuesta')";

     //Ejecutar las consultas
if (mysqli_query($conexion, $sql)) 
{
      
echo " <br> Registro exitoso.";
echo "<br> <a href='../index.php' > Ver mas eventos</a></div>";
}
else{ //Muestra mensajes
echo " <br> <br>Error " . $sql . "<br>" . mysqli_error($conexion);
}
}
else {
echo"El registro de este correo ya existe.";
echo "<br> <a href='../index.php' > Intenta de nuevo</a></div>";
}

    mysqli_close($conexion); // se cierra la conexion
?>