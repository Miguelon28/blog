<?php
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cerrar Sesión</title>
	</head>
	<body>
		<h2>Has Cerrado Sesión como: "<?php echo $_SESSION['usuario']; ?>"</h2>
		<br>
		<th><a href="index.php">Volver al login</a></th>
	</body>
</html>
<?php
	session_destroy();
?>
