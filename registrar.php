<?php
include('conex.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>registrar</title>
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
<br>
<div class="row">
      <div class="col-md-12" style="background-color:#" >
  <div class="form-group">
  <label for="usr">Nombre Completo</label>
  <input type="text" class="form-control" id="nombre" name="nombre" >
</div>
  </div>
  </div>
		
	<div class="row">	
  <div class="col-md-12" style="background-color:#" >
      <div class="form-group">
  <label for="usr">Email</label>
  <input type="text" class="form-control" id="email" name="email" >

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
  <input type="Password" class="form-control" id="password" name="password" >
</div>
  </div>
  </div>

  <div class="row">	
  <div class="col-md-12" style="background-color:#" >
      <div class="form-group">
        <br>
   <p class="regtext">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>

  <br>
  <center>
<button type="submit" class="btn btn-primary" href="login.php" id="registrar" name="registrar">Registrarse</button>

<?php
             if (isset($_POST['registrar']))
         {
              
           if (!empty($_POST['usuario']))
           {
             mysqli_query($cnx, "INSERT into regis values
               ( '$_POST[nombre]',
                '$_POST[email]',
                '$_POST[usuario]',
                '$_POST[password]')");
           }
         }
      
            ?>

</center>
<br>

</div>
 </div>
</form>
</body>
</html>
