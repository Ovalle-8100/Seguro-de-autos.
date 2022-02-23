<?php
session_start();
include ('conex.php');
?>

<?php
#validar que el usuario exista en la DB
if(isset($_POST['entrar']))
{
  $query= "SELECT * from regis WHERE 
  usuario = '$_POST[usuario]' and password ='$_POST[password]'";
  $registro = mysqli_query($cnx,$query);
  $datos = mysqli_num_rows($registro);
  $campo = mysqli_fetch_array($registro);
  $_SESSION['nombre'] = $campo ['nombre'];
 $_SESSION['email'] = $campo ['email'];
 
if($datos>0)
{
  header('location:cotizar.php');
}

}

if(isset($_POST['entrar']))
{
  $query= "SELECT * from administrador WHERE 
  usuario = '$_POST[usuario]' and password ='$_POST[password]'";
  $registro = mysqli_query($cnx,$query);
  $datos = mysqli_num_rows($registro);
  $campo = mysqli_fetch_array($registro);
  $_SESSION['nombre'] = $campo ['nombre'];
 $_SESSION['email'] = $campo ['email'];
 
if($datos>0)
{
  header('location:sesion_administrador.php');
}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<body background="images/fondito.jpg">
		<form method="post">
<br>
	<div class="container" >	
		<center>
			<br>
			<br>
			<br>

			<br>
<div class="card" style="width:600px" >
  	  <img src="images/usuario.jpg" class="rounded-circle" width="250" height="250">
    <div class="card-body" style="background-color:#" >

<div class="row">
      <div class="col-md-12" style="background-color:#" >
  <div class="form-group">
  <label for="usr">Usuario</label>
  <input type="text" class="form-control" id="usuario" name="usuario" >
</div>
  </div>
  </div>
		
	<div class="row">	
  <div class="col-md-12" style="background-color:#" >
      <div class="form-group">
  <label for="usr">Password</label>
  <input type="Password" class="form-control" id="Password" name="Password" >

  <div class="row">	
  <div class="col-md-12" style="background-color:#" >
      <div class="form-group">
        <br>
    <p class="regtext">No estas registrado? <a href="registrar.php" >Registrate Aquí</a>!</p>

  <br>
  <center>
<button type="submit" class="btn btn-primary" id="entrar" name="entrar">Iniciar</button>
</center>
<br>
</div>
 </div>
</body>
</html>
