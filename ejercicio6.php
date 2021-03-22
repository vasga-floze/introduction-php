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

	<div class="team" body style="background-color:#2DCB74;">
        <div class="container">
                <div class="popular-heading team-heading">
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 6</h3>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;"> Cree una función que calcule cual es el número mayor de dos enteros, establezca el
						valor de salida correspondiente y haga uso de strict_types.<br/>
					</h2>
                </div>
        </div>
    </div>

		<FORM ACTION="ejercicio6.php"  METHOD="POST"> 
	
			Introduzca el primer número:
			<INPUT  TYPE="text" NAME="numero1"><BR> 
			Introduzca el segundo número:
			 <INPUT TYPE="text" NAME="numero2"><BR> 
			<INPUT TYPE="submit" VALUE="Compara" NAME="btn1" class="btn btn-success"> 
	
		</FORM>   

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

	<div class="copyright wow fadeInUp animated" data-wow-delay=".5s" body style="background-color:#2DCB74;">
		<p class= "text-center">© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
