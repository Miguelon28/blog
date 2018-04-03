<?php 
//control de errores 
// 1. usuario no existe
// 2.contraseña incorrecta
  if (isset($_GET['error'])) {
		$error = $_GET['error'];

	switch ($error) {
 		case '1':
 			echo " El usuario no existe";
 			break;
 		case '2':
 			echo "La contraseña es incorrecta";
 			break;	
 	   
 		case '3':
 			echo " Se ha Registrado Correctamente, ! Inicie Sesión ¡ ";
 			break;	
	}
}

 ?>

<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="registro.css"> 
  <style type="text/css"> </style> 


	<title>Login</title>
	<script>

      function validar(form){
      	if (form.user.value==""){
      		alert("Debe escribir su nombre de usuario");
      		form.user.focus();
      		return
      	 }

        if (form.pass.value==""){
      	alert("Debe de escribir su contraseña de usuario");
      	form.pass.focus();
      	return;
         }
       var str= form.pass.value;
         if (str.length < 6){
        alert("Debe de introducir una contraseña con mas de 6 caracteres");
      	form.pass.focus();
      	return;
      }
        form.submit();
    }

	</script>
 </head>
 <body>
	<form action="validarlogin.php" method="POST">
  <table border="1" id="login">
   <tr>
     <th><p>Nombre:</p></th>
     <th><input type="text" placeholder="Nombre" name="user" id="user"required/></th>
   </tr>

   <tr>
     <th><p>Clave:</p></th>
     <th><input type="password" placeholder="Clave" name="pass" id="pass"required/></th>
   </tr>

  </table
   </form>
   <br>
   <input type="button" value="Enviar" onclick="validar(this.form)" />
   <br><br>
   <a href="registrar.php">Registrar</a>
  
   <a href="password.php">¿Olvidaste tu contraseña?</a>
</body>
</html>