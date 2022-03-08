<?php
  include("php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- linkeo a estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">
</head>

<body>
    <header class="my-nav">
        <div class="nav-menus">
            <div class="burger-nav">
                <input type="checkbox" id="burger-status" hidden>
                <label for="burger-status"> 
					<i class="fa-solid fa-bars"> </i>
				</label>
            </div>
        </div>

    </header>

    <!--menu lateral-->

    <div class="nav-lateral" id="nav-lateral">
        <label for="burger-status" class="close-1"> 
        <i class="fa fa-times" aria-hidden="true"></i>
    </label>
        <h1>Eventos</h1> <br>

        <ul class="options-lateral">
            <li class="option-1"> <a href="index.php" class="boton " id="recientes ">Recientes</a>
            </li>
            <li class="option-1"> <a href="Prox_Ev.php" class="boton " id="prox ">Proximos</a>
            </li>
        </ul>
    </div>

    <!--resto del diseño-->

    <!-- imagen, titulo -->
    <div class="title">
        <h1> Eventos </h1>
        <img src="img/cortada.jpeg" >
        <hr class="linea ">
        <br>
    </div>
    
    <div class="big-nav ">
        <ul class="options ">
            <li class="option ">
                <a href="index.php " class="boton " id="recientes ">Recientes</a>
            </li>
            <li class="option ">
                <a href="Prox_Ev.php " class="boton " id="prox ">Proximos</a>
            </li>
        </ul>
        <br>
    </div>
<!-- carrucel -->

<?php
				
	$consulta = "SELECT * FROM evento ";
							
	$datos = mysqli_query ($conexion, $consulta);
	
    while ($fila=mysqli_fetch_array($datos)){	
?>
    <div class="eventos ">
        <div class="video ">
            <video controls>
                    <source src="videos/erik.mp4 ">
            </video>
        </div>

        <div class="informacion ">
            <h3> <?php echo "$fila[titulo] "?> </h3>
            <br>
            <hr class="linea ">
            <h4> Descripcion del evento </h4>
            <br>
            <p> <?php echo "$fila[descript] "?> </p>
            <br>
            
            <div id="dat ">
                <div class="datos ">
                    <ul>
                      <li><h5> Hora: <?php echo "$fila[horario] "?> </h5></li>  
                      <li><h5> Fecha: <?php echo "$fila[fecha_inicio] "?> </h5></li>
                      <li><a href="https://goo.gl/maps/wLuHyLspqBnC5jr68 " class="btn-U "><b>Ubicación</b></a></li>
                    </ul>
                    <hr class="linea ">
                    <br>
                    <a href="Formulario.php " class="btn " id="registrate "> Registrar</a>
                </div>  
            </div> 
        </div>
    </div>
    <?php
}
?>
    <br>
    <hr class="linea ">
    <br>
    <br>
    <br>
    <br>
    

    <!--Script-->
    <script src="../Eventos/libs/jQuery.js ">
    </script>
    <script src="js/burgerNav.js ">
    </script>

</body>

</html>