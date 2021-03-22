<?php

	//obligamos a retornar el valor de retorno especificado
	declare(strict_types=1);

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
    <form method="post" action="ejercicio1.php" class="text-center">
    <div class="form-group">
    <label for="num1">Ingrese un número</label><br>
    <input type="text" name="num1"/>
	</div>

	
    <?php 
    declare(strict_types=1);
    

   
    function calcular($numero1, $numero2):float{
        $numero1=3.4;
        $numero2=6.4;
        
    if ($numero1>$numero2){
        echo "$numero1 es mayor que $numero2";
    }
    else{
        echo "$numero2 es mayor que $numero1";
    }


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

	<div class=" container text-center wow fadeInLeft animated" data-wow-delay=".5s">
		<FORM ACTION="ejercicio6.php"  METHOD="POST"> 
		
			<h3>Introduzca el primer número entero:</h3>
			<INPUT  TYPE="number" NAME="numero1"><BR> 
			<h3>Introduzca el segundo número entero:</h3>
			<INPUT TYPE="number" NAME="numero2">
			<hr> 
			<button type="submit" class="btn btn-success" type="submit" name="btn1"><h4>Comparar</h4></button>

		</FORM> 
	</div>  

        <?php
		 
			function comparar ($v1,$v2):int{
			
				if ($v1>$v2){
					echo "<h3 class='text-center wow fadeInRight animated'>El número mayor es $v1</h3>";
					return $v1;
				}
				elseif ($v1==$v2){
					echo "<h3 class='text-center wow fadeInRight animated'>El número $v1 es igual al número $v2</h3>";
					return $v2;
				}
				else{
					echo "<h3 class='text-center wow fadeInRight animated'>El número mayor es $v2</h3>";
					return $v2;
				}
			}

			if(isset($_POST['btn1'])){

				$num1 = $_POST['numero1'];
				$num2 = $_POST['numero2'];
				
				 comparar((int)$num1,(int)$num2);
				
				}

        ?>

    <!-- //FIN DEL EJERCICIO -->
	<div class="copyright wow fadeInUp animated" data-wow-delay=".5s" body style="background-color:#2DCB74;">
		<p class= "text-center">© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
