<?php
include('conex.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon"  href="images/hhotel.png">
<title>Banorte</title>
</head>

<body background="images/87.jpg">
<form method="post">
	<div class="container">
		<br>
		<br>
		<br>
		<br>
	<table class="table table-dark table-striped">
  <tbody>
    <tr>
      <th width="102" scope="col">marca</th>
      <th width="259" scope="col">modelo</th>
      <th width="115" scope="col">edad</th>
      <th width="123" scope="col">genero</th>
	  <th width="259" scope="col">ingreso</th>
      <th width="115" scope="col">nombre</th>
      <th width="123" scope="col">correo</th>
       <th width="259" scope="col">telefono</th>
    </tr>
	  <?php

	  $reg=mysqli_query($cnx,"select * from seguro_autos");
	  $i=1;
	  while($campo=mysqli_fetch_array($registro))
	  {
	  ?>
    <tr>
      <td><?php echo $campo['marca'];?></td>
      <td><?php echo $campo['modelo'];?></td>
      <td><?php echo $campo['edad'];?></td>
      <td><?php echo $campo['genero'];?></td>
		<td><?php echo $campo['ingreso'];?></td>
      <td><?php echo $campo['nombre'];?></td>
      <td><?php echo $campo['correo'];?></td>
      <td><?php echo $campo['telefono'];?></td>
    </tr>
	   <?php
		  $i++;
	  }
	  ?>
  </tbody>
</table>
	</div>
</form>
</body>
</html>