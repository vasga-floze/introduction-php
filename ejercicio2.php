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
<div class="team">
      <div class="container">
        <div class="popular-heading team-heading">
          <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 2</h3>
          <p class="wow fadeInUp animated" data-wow-delay=".5s">Realice un script PHP que muestre mediante la utilización de variables 
          sus datos personales: nombre  completo,  lugar de  nacimiento  (departamento y  país, si  es extranjero), edad  y Código de Estudiante. 
          Muestre estos datos en una tabla.</p>    
           </div>
                </div>
            </div>
        </div>
<br>
    <!-- DESARROLLO DEL EJERCICIO -->

    <table class="table table-bordered table-dark wow fadeInRight animated">>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Pais</th>
      <th scope="col">Departamento de nacimiento</th>
	  <th scope="col">Edad</th>
	  <th scope="col">Codigo de estudiante</th>
	  
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php $nombre="Roberto Kilmar Chevez Reyes";
	  echo $nombre; ?> </td>
	  <td> <?php $pais="";
	  echo $pais; ?> </td>
      <td> <?php $nacimiento="Usulutan";
	  echo $nacimiento; ?> </td>
	   <td> <?php $edad="21";
	  echo $edad; ?> </td>
	  <td> <?php $codigo="SMIS619019";
	  echo $codigo; ?> </td>
      </thead>
	  </tr>

    <tr>
    <th scope="row">2</th>
      <td> <?php $nombre="Vasti Gabriela Flores Zelaya";
	  echo $nombre; ?> </td>
	  <td> <?php $pais="Guatemala";
	  echo $pais; ?> </td>
      <td> <?php $nacimiento="Antigua Guatemala";
	  echo $nacimiento; ?> </td>
	   <td> <?php $edad="21";
	  echo $edad; ?> </td>
	  <td> <?php $codigo="SMIS023453";
	  echo $codigo; ?> </td>
    </tr>

    <th scope="row">3</th>
      <td> <?php $nombre="David Alexander Cruz Rivas";
	  echo $nombre; ?> </td>
	  <td> <?php $pais="";
	  echo $pais; ?> </td>
      <td> <?php $nacimiento="San Miguel";
	  echo $nacimiento; ?> </td>
	   <td> <?php $edad="22";
	  echo $edad; ?> </td>
	  <td> <?php $codigo="SMIS008921";
	  echo $codigo; ?> </td>
    </tr>
 
  </tbody>
</table>

    <!-- //FIN DEL EJERCICIO -->
    <div  class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>

