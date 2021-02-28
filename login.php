<?php 
session_start();
 require 'database.php';
 if (!empty($_POST['email']) && !empty($_POST['password'])) {
   $records = $conn->prepare('SELECT id_users, email, password FROM users WHERE email =:email');
   $records->bindParam(':email', $_POST['email']);
   $records->execute();
   $results = $records->fetch(PDO::FETCH_ASSOC);
   $message= '';
   if (count($results)> 0 && password_verify($_POST['password'], $results['password'])) {
     $_SESSION ['users_id'] = $results['id_users'];
    header('Locationn: ethereal/tienda.html');
   } else{
    $message= 'no funciono mi loco';
   }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/vistas.css">
<body background="hipertextual-version-final-tesla-roadster-sera-mejor-todos-aspectos-que-anticipada-2017-2019118837.png">
    <?php require 'unavaina.php' ?>
  <div class="hola">
    <?php if (!empty($message)) :?>
    <p> <?= $message ?></p>
    <?php endif; ?>
	<h1>Log in</h1>
		<span> o <a href="sing up.php"> Registrate</a></span>
<form class="" action="ethereal/tienda.html" method="post">

	<input type="text" name="email" placeholder="introduce tu correo" style="border-radius: ">
	<input type="password" name="password" placeholder="ingrese su contrasena" > 
	<input type="submit" name="" value="enviar" id="sombras" >
</form>
</div>
</body>
</html>