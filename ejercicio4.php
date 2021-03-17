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
    <title>Ejercicio 4</title>
</head>
<body>
    <!-- DESARROLLO DEL EJERCICIO -->

    <div class="team" body style="background-color:#2DCB74;">
        <div class="container">
                <div class="popular-heading team-heading">
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 4</h3>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;"> Cree un array asociativo en donde almacene los datos mostrados en la siguiente tabla.<br/></h2>
                </div>
                <div class=" team-heading">
                    <img src="images/cuatro.jpg" class="img-thumbnail wow fadeInRight animated" alt="100px" >
                </div>
                <div class="team-heading">
                    <br/><br/>
                    <h2 class="wow fadeInUp animated team-heading" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">Se pide:</h2>
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- Mostrar los datos del array en una tabla</h3>
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- Calcular el salario promedio</h3>
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- Cantidad de empleados por departamento</h3>
                </div>
        </div>
    </div>

    <?php
        /* Crear array asociativo*/
        $employees = array(
            array( 
                "departamento" => "R.R.H.H", 
                "empleado" => "Margarita Linares", 
                "salario" => "$3,500" 
            ),
            array( 
                "departamento" => "Contabilidad ", 
                "empleado" => "Alberto Canizales", 
                "salario" => "$2,500" 
            ),
            array( 
                "departamento" => "Finanzas", 
                "empleado" => " Maria Gomez", 
                "salario" => "$2,500" 
            ),
            array( 
                "departamento" => "Gerencia", 
                "empleado" => " Anastacia Rivera", 
                "salario" => "$3,000" 
            ),
            array( 
                "departamento" => "Finanzas", 
                "empleado" => "Bladimir Romero", 
                "salario" => "$1,000" 
            ),
            array( 
                "departamento" => "Contabilidad ", 
                "empleado" => "Andrea Robles", 
                "salario" => "$3,500" 
            ),
            array( 
                "departamento" => "R.R.H.H", 
                "empleado" => "Carmen Rosales", 
                "salario" => "$1,500" 
            )
        );
    ?>


    <!-- //FIN DEL EJERCICIO -->

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
