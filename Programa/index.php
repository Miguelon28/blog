 <?php session_start() ?>
<?php if(isset($_SESSION['usuario']))
{
?>
  <h1>Bienvenido de nuevo <?php echo $_SESSION['usuario'] ?>.</h1>
<?php 
}else{
  header("Location: login.php");
}
 ?>