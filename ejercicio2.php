<?php

    //incluir archivo de cabecera
    include "header.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<div class="team" body style="background-color:#2DCB74;">
      <div class="container">
        <div class="popular-heading team-heading">
          <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 2</h3>
          <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;">Realice un script PHP que muestre mediante la utilización de variables 
          sus datos personales: nombre  completo,  lugar de  nacimiento  (departamento y  país, si  es extranjero), edad  y Código de Estudiante. 
          Muestre estos datos en una tabla.</h2>    
           </div>
                </div>
            </div>
        </div>
<br>
    <!-- DESARROLLO DEL EJERCICIO -->

    <table class="table table-bordered table-dark wow fadeInRight animated">
  <thead>
    <tr>
      <th scope="col"><h4>#</h4></th>
      <th scope="col"><h4>Nombre</h4></th>
      <th scope="col"><h4>País</h4></th>
      <th scope="col"><h4>Departamento de nacimiento</h4></th>
	  <th scope="col"><h4>Edad</h4></th>
	  <th scope="col"><h4>Código de estudiante</h4></th>
	  
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <h4><?php $nombre="Roberto Kilmar Chevez Reyes";
	  echo $nombre; ?></h4> </td>
	  <td> <h4><?php $pais="El Salvador";
	  echo $pais; ?></h4> </td>
      <td> <h4><?php $nacimiento="Usulutan";
	  echo $nacimiento; ?></h4> </td>
	   <td> <h4><?php $edad="21";
	  echo $edad; ?></h4> </td>
	  <td> <h4><?php $codigo="SMIS619019";
	  echo $codigo; ?></h4> </td>
      </thead>
	  </tr>

    <tr>
    <th scope="row">2</th>
      <td> <h4><?php $nombre="Vasti Gabriela Flores Zelaya";
	  echo $nombre; ?></h4> </td>
	  <td> <h4><?php $pais="El Salvador";
	  echo $pais; ?></h4> </td>
      <td> <h4><?php $nacimiento="San Miguel";
	  echo $nacimiento; ?></h4> </td>
	   <td> <h4><?php $edad="20";
	  echo $edad; ?></h4> </td>
	  <td> <h4><?php $codigo="SMIS003119";
	  echo $codigo; ?></h4> </td>
    </tr>

    <th scope="row">3</th>
      <td> <h4><?php $nombre="David Alexander Cruz Rivas";
	  echo $nombre; ?> </h4></td>
	  <td> <h4><?php $pais="El Salvador";
	  echo $pais; ?></h4> </td>
      <td> <h4><?php $nacimiento="San Miguel";
	  echo $nacimiento; ?></h4> </td>
	   <td> <h4><?php $edad="22";
	  echo $edad; ?></h4> </td>
	  <td> <h4><?php $codigo="SMIS008921";
	  echo $codigo; ?></h4> </td>
    </tr>
 
  </tbody>
</table>

    <!-- //FIN DEL EJERCICIO -->
    <div  class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>

