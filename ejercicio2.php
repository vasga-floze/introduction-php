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
<body >
<div style="background-color:#2DCB74;" class="team">
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
  <!-- Cabecera -->
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Pais</th>
      <th scope="col">Departamento de nacimiento</th>
	  <th scope="col">Edad</th>
	  <th scope="col">Codigo de estudiante</th>
	  
    </tr>
  </thead>
  
  <!--  -->
  <tbody>
    <tr>
      <th scope="row">1</th>
       <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nombre="Roberto Kilmar Chevez Reyes";
      //se muestra la variable
	  echo $nombre; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $pais="";
      //se muestra la variable
	  echo $pais; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nacimiento="Usulutan";
      //se muestra la variable
	  echo $nacimiento; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	   <td> <?php $edad="21";
       //se muestra la variable
	  echo $edad; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $codigo="SMIS619019";
      //se muestra la variable
	  echo $codigo; ?> </td>
      </thead>
	  </tr>

    <tr>
    <th scope="row">2</th>
     <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nombre="Vasti Gabriela Flores Zelaya";
      //se muestra la variable
	  echo $nombre; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $pais="Guatemala";
      //se muestra la variable
	  echo $pais; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nacimiento="Antigua Guatemala";
      //se muestra la variable
	  echo $nacimiento; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	   <td> <?php $edad="21";
       //se muestra la variable
	  echo $edad; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $codigo="SMIS023453";
      //se muestra la variable
	  echo $codigo; ?> </td>
    </tr>

    <th scope="row">3</th>
     <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nombre="David Alexander Cruz Rivas";
      //se muestra la variable
	  echo $nombre; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $pais="";
      //se muestra la variable
	  echo $pais; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
      <td> <?php $nacimiento="San Miguel";
      //se muestra la variable
	  echo $nacimiento; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	   <td> <?php $edad="22";
       //se muestra la variable
	  echo $edad; ?> </td>
       <!-- Se crea la variable y se le asignan sus valores -->
	  <td> <?php $codigo="SMIS008921";
      //se muestra la variable
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

