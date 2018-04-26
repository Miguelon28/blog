<?php 
	session_start();

	if (isset($_SESSION['usuario'])) {
		echo "<h3>Bienvenido a la publicacion<br>".$_SESSION['usuario'];
	}else{
		echo "<h3>No puede ingresar<br>Inicie sesión primero";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Publicación</title>
</head>
<body>
	 <table>
	 <tr>
	 	<th>Titulo</th>
	 	<th>Descripcion</th>
	 	<th>Acciones</th>
	 </tr>
	 </table>
	 <a href="index.php">Regresar</a>
</body>
</html>