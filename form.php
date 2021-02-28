
   <?
include("correo.php");
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="../assets/css/vistas.css">
<body>

	<div class="hola" style="border: 2px solid; padding-top: 30px; width: 900px; height: 600px; box-shadow: 30px;">
	
	<form id="contactform" action="correo.php" name="contactform" method="POST">
    <fieldset>
        <div>
            <input type="text" name="nombre" id="first_name" placeholder="Nombre">
        </div>
        <div>
            <input type="text" name="apellido" id="last_name" placeholder="Apellido Paterno">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <input type="text" name="numero" id="phone" placeholder="Teléfono">
        </div>
        <div>
            <textarea class="form-control" name="mensaje" id="comments" rows="6"></textarea>
        </div>
        <input type="submit" name="enviar" value="Enviar">
    </fieldset>
</form>
</body>
</html>
/************************************************************************
Código PHP
<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "odoleo01@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location: index.html");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>

	</div>
</body>
</html>