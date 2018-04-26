<!DOCTYPE html>
<html>
<head>
	<title>Nueva Pubicacion</title>
</head>
<body>
	<form action="insertarpu.php" method="POST">
	<table border="1">
	<tr>
		<th>Titulo:</th>
		<th><input type="text" name="titulo"></th>
	</tr>
	<br><br>
	<tr>
		<th>Descripcion:</th>
		<th><INPUT id=texto style="width:228px; height:228px" size=32 name="cuerpo"> </th>
	</tr>
	<br><br>
		<th><input type="submit" value="Aceptar"></th>
		<th><a href="index.php">Regresar</a></th>
	</table>
	<table>
		<?php 
		include('../BD/conectar.php');
           function tabla($tabla,$conexion){
            $query = $conexion->prepare("select * from $tabla");
            $query->execute();
            return $query;
           }
           $pubs=tabla("categorias",$pdo);
           foreach ($pubs as $pub ) {
		?>
		<tr>
			<th><select>
			<option value="1"><?php echo $pub['valor']; ?></option>
			</select></th>
		</tr>
		<?php } ?>
	</table>
	</form>
</body>
</html>