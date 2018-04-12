<?php   

    include("../BD/conectar.php");
    $regis = $pdo->prepare('INSERT INTO usuarios (usuario, nombre, password, email) VALUES ( :usu, :nom, :pass, :ema)');


     $regis->bindparam(':usu', $usu);
     $regis->bindparam(':nom', $nom);
     $regis->bindparam(':pass', $pass);
     $regis->bindparam(':ema', $ema);


      if(isset($_POST['nombre'])){

        $usu =$_POST['usuario'];
        $nom =$_POST['nombre'];
        $pass=$_POST['password'];
        $ema =$_POST['email'];
        
         $regis ->execute();


        header("location:login.php?error=3");
       }
 ?>

<html>
<head>
  <meta charset= "UTF-8">
  <title>Registrar</title>
   <link rel="stylesheet" type="text/css" href="registro.css"> 
  <style type="text/css"> </style> 



</head>
<body>
  <form action="registrar.php" method="POST" >
   <table border="1" id="registrar">
     <tr>
        <th><p>Usuario:</p></th>
        <th><input type="text" placeholder="Ingrasa Nombre de Usuario" name="usuario" required/></th>
       
     </tr>  
     <tr>
         <th><p>Nombre:</p></th>
         <th><input type="text" placeholder="Ingresa tu Nombre" name="nombre" required/></th>
     </tr>
      <tr>
        <th><p>Contraseña:</p></th>
        <th><input type="password" placeholder="Ingresa Contraseña" name="password" required/></th>
      </tr>  

      <tr>
         <th><p>Correo:</p></th>
         <th><input type="text" placeholder="Ingresa Correo" name="email" required/></th>
         
      </tr>
    
   </table>
   <br>
   <input type="submit" value="Registrar" /> 
   <a href="login.php">Regresar</a>
  </form>

</body>
</html>