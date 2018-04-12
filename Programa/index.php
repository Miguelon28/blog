  <?php
    session_start();
    
    $name=$_SESSION['usuario'];
       
   ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<TITLE>INICIO</TITLE> 
</head>
<body>
  <center>
    <h1>Bienvenido <?php echo $name; ?></h1>
  </center>

    	<?php
           include('../BD/conectar.php');
           function tabla($tabla,$conexion){
            $query = $conexion->prepare("select * from $tabla");
            $query->execute();
            return $query;
           }
           $pubs=tabla("publicaciones",$pdo);
           foreach ($pubs as $pub ) {
             echo $pub['titulo'];
             echo "<br><br>";
             echo $pub['cuerpo'];
             echo "<br><br>";
           }
   			
        ?>
   </body>
</html>