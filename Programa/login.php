<?php
require_once 'login.class.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();

if(isset($_POST['usuario']))
{
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	//accedemos al método usuarios y los mostramos
	$user = $nuevoSingleton->login_usuarios($usuario,$password);
	
	if($user == TRUE)
	{
		header("Location:home.php");
	}
}
?>
