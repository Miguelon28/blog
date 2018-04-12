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
  <title>Login</title>
  <script>

      function validar(form){
        if (form.usuario.value==null){
          alert("Debe escribir su nombre de usuario");
          form.usuario.focus();
          return
         }

        if (form.password.value==""){
        alert("Debe de escribir su contraseña de usuario");
        form.pass.focus();
        return;
         }
       var str= form.password.value;
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
     <th><p>Nombre Usuario:</p></th>
     <th><input type="text" placeholder="Usuario" name="usuario" id="usuario"required/></th>
   </tr>

   <tr>
     <th><p>Contraseña:</p></th>
     <th><input type="password" placeholder="Contraseña" name="password" id="password"required/></th>
   </tr>

  </table
</form>
   <br>
   <input type="button" value="Ingresar" onclick="validar(this.form)" />
   <br><br>
   <a href="registrar.php">Registrar</a>
   <br><br>
    <table border="1">
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
        </tr>
      </table>

</body>
</html>