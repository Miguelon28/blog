<?php 
	function dbase($tabla, $conexion){
		$stae = $conexion->prepare("SELECT * FROM $tabla");
		$stae->execute();
		return $tabla = $stae;
	}
?>