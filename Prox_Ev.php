<?php
include("php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proximos Eventos</title>
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
            <li class="option-1"> <a href="index.php " class="boton-nav " id="recientes ">Recientes</a>
            </li>
            <li class="option-1"> <a href="Prox_Ev.php " class="boton-nav " id="prox ">Proximos</a>
            </li>
        </ul>
    </div>

    <!-- Titulo e imagen -->
    <div class="title_P">
        <h1> Próximos Eventos </h1>
        <img src="img/p_cortada.jpeg">
        
        <br><br><br><br>
    </div>

    <!-- botones -->

    <div class="big-nav ">
        <ul class="options ">
            <li class="option ">
                <a href="index.php " class="boton " id="recientes ">Recientes</a>
            </li>
            <li class="option ">
                <a href="Prox_Ev.php " class="boton " id="prox ">Proximos</a>
            </li>
        </ul>
        <br><br><br>
    </div>
    <hr class="linea "> <br>

    <!-- Tarjetas -->
    <div class="lienzo">
        <?php

        $consulta = "SELECT * FROM evento ";

        $datos = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_array($datos)) {
        ?>

        <div class="card">
            <div class="card-text">
                <h2 class="card-title">
                    <?php echo "$fila[titulo] " ?>
                </h2>
                <div class="card-img">
                <?php
                $data = explode("*", $fila['foto']);
                if ($data[0] == "i") {
                ?>
                    <img src="img/<?php echo $data[1] ;  ?>" alt="">
                <?php
                } else {
                ?>
                    <video controls>
                        <source src="videos/<?php echo $data[1]; ?> ">
                    </video>

                <?php } ?>                
                </div><br>
                <button class="btn" id="btn-p">Me interesa</button>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <!------------------ Modal -->

    
 <?php

                    $consulta = "SELECT * FROM evento ";

                    $datos = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_array($datos)) {
                ?>
    <div class="modal-content" id="mymodal">
        <div class="modal-window">
            <button class="modal-exit" id="modal-exit">X</button>
            <div class="modal-text">
               
                <h1 class="modal-title"><?php echo "$fila[titulo] " ?></h1>
                <br><br>
                <div class="modal-descrip">

                    <p><?php
                    $data = explode("*", $fila['descript']);
                    for ($i = 0; $i < count($data); $i++) {
                        if ($i == 1) {
                            echo "<a href='" . $data[$i] . "' target='_blank'> Por motivo del 8 de Marzo, te invitamos a participar en la semana de emprendimiento para mujeres <br> <br>¡Pintate de naranaja! <br><br><br> Da click aqui para conocer el temario </a>";
                            break;
                        }
                        echo $data[$i] . "<br>";
                    }
                    ?> </p>
                    
                    <br> <br>
                    <div id="dat ">
                        <div class="datos ">
                            <ul>
                                <li>
                                    <h5> Hora: <?php echo "$fila[horario] " ?> </h5>
                                </li>
                                <li>
                                    <h5> Fecha: <?php echo "$fila[fecha_inicio] " ?> </h5>
                                </li>
                              <!--  <li><a href="https://goo.gl/maps/wLuHyLspqBnC5jr68 " class="btn-U "><b>Ubicación</b></a>
                                </li>-->
                            </ul>
                            <br>
                            <a href="Formulario.php" class="btn " id="registrate "> Registrar</a>
                            <br>
                        </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>
<?php } ?> 
        
       
    <br>
    <hr class="linea">
    <br>

    <!--Script-->
    <script src="../Eventos/libs/jQuery.js ">
    </script>
    <script src="js/burgerNav.js ">
    </script>
</body>

</html>