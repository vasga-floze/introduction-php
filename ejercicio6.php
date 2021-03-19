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
    <title>Ejercicio 6</title>
</head>
<body>
    <!-- DESARROLLO DEL EJERCICIO -->

	<center> 
    
	<P>Cree una función que calcule cual es el número mayor de dos enteros,<BR>
	 establezca el valorde salida correspondiente y haga uso de strict_types.</P>
	
	 <hr >
	
	
		<FORM ACTION="ejercicio6.php"  METHOD="POST"> 
	
			Introduzca el primer número:
			<INPUT  TYPE="text" NAME="numero1"><BR> 
			Introduzca el segundo número:
			 <INPUT TYPE="text" NAME="numero2"><BR> 
			<INPUT TYPE="submit" VALUE="Compara" NAME="btn1" class="btn btn-success"> 
	
		</FORM>   
		
	</center>


        <?php
		 if(isset($_POST['btn1'])){

			$num1 = $_POST['numero1'];
			$num2 = $_POST['numero2'];
			
			 comparar($num1,$num2);
			
			}
			
			
			function comparar ($v1,$v2) {
			
			if ($v1>$v2){
				 echo "El número mayor es (".$v1.")";
			}
			elseif ($v1==$v2){
				echo "El número (".$v1.") es igual al número (".$v2.")";
			}
			else{
				echo "El primer número mayor es(".$v2.")";
			}
			
			}
		

        ?>

    <!-- //FIN DEL EJERCICIO -->

    <!-- footer -->
<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>Navegacion</h4>
					<ul>
					<li>
						<li><a href="ejercicio1.php">Ejercicio 1</a></li>
						<li><a href="ejercicio2.php">Ejercicio 2</a></li>
						<li><a href="ejercicio3.php">Ejercicio 3</a></li>
						<li><a href="ejercicio4.php">Ejercicio 4</a></li>
                        <li><a href="ejercicio5.php">Ejercicio 5</a></li>
                        <li><a href="ejercicio6.php">Ejercicio 6</a></li>
                        <li><a href="ejercicio7.php">Ejercicio 7</a></li>
								
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
				<p>© 2021  . Universidad Gerardo Barrios</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>
</html>
