<!DOCTYPE html>
<html>

<head>
    <title> Registro</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
</head>
<style>
    body {
        background-image: url('img/fondo.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<div class="padre-form">
<form action="php/Registro.php" method="post" class="form-registra">
    <div class="for">
        <legend class="form-titulo"> Semana de emprendimiento para mujeres. </legend>
        <br><br>
        <label for="nombre"> Nombre </label>
        <input type="text" id="nombre" name="nombre" maxlength="40" size="30" required>
        <br><br>
        <label for="apa"> Apellido Paterno </label>
        <input type="text" id="apa" name="apa" maxlength="40" size="30" required>
        <br><br>
        <label for="ama"> Apellido Materno </label>
        <input type="text" id="ama" name="ama"  maxlength="40" size="30" required>
        <br><br>
        <label for="gmail"> Correo </label>
        <input type="email" id="gmail" name="gmail" required>
        <br><br>
        <label for="edad"> Edad </label>
        <input type="number" id="edad" name="edad" required>
        <br><br>
        <label for="pais"> País </label>
        <input type="text" id="pais" name="pais"  required>
        <br><br>
        <label for="ciudad"> Ciudad </label>
        <input type="text" id="ciudad" name="ciudad"  required>
        <br><br>
        <label> ¿Cuentas con alguna idea de negocio? </label>
        <br><br> Si <input type="radio" id="si" name="check" value="si">
                 No <input type="radio" id="no" name="check" value="no"> 
                 Tal vez <input type="radio" id="talvez" name="check" value="talvez">
        <br> <br>
        <label>Si tienes alguna idea de negocio, por favor descríbela</label>
        <br> <br><textarea id="idea" name="desc_idea"  rows="5" cols="41"> </textarea>
        <br> <br>
        <label for="tel"> WhatsApp </label>
        <input type="number" id="tel" name="tel" maxlength="10" size="15" required>
        <br><br>
        <input type="submit" class="botonReg" value="Registrar" id="btn_reg">
        <input type="reset" class="botonRes" value="Restablecer" id="btn_res">
        <a href="index.php" class="botonCan" id="btn_cal">Cancelar</a>
        <br> <br>
    </div>
</form>
</div>

<div class="logos">
    <img src="img/f1.jpg" class="logos-funda" id="f1">
    <img src="img/f2.png" class="logos-funda" id="f2">
    <img src="img/f3.jpg" class="logos-funda" id="f3">
    <img src="img/f4.jpg" class="logos-funda" id="f4">
</div>

</body>

<footer>

</footer>

</html>