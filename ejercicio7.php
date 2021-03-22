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
    <title>Ejercicio 7</title>
</head>
<body>
    <!-- DESARROLLO DEL EJERCICIO -->

    <div class="team" body style="background-color:#2DCB74;">
        <div class="container">
            <div class="popular-heading team-heading">
                <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 7</h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;">Escriba una función que reciba como parámetro un arreglo con el nombre y tres
					notas de 10 estudiantes, la salida deberá mostrar:
				</h2>
            </div>
            <div class="team-heading">
                <br/>
                <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- Nombres y notas de los estudiantes.</h3>
                <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- El promedio de las notas por estudiante.</h3>
                <h3 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff; font-family: 'Francois One', sans-serif">- Si la nota es mayor a 7, 
					deberá mostrar el mensaje “Aprobado” de lo contrario deberá mostrar “Debe mejorar”
				</h3>
        	</div>
		</div>
    </div>
	
	<?php
        /* Crear array asociativo*/
        $students = array(
            array(
                "studentName" => "Angie Alvarado",
				"nota1" => 8,
				"nota2" => 7,
				"nota3" => 6
            ),
            array( 
                "studentName" => "Pablo Sanchez",
				"nota1" => 6,
				"nota2" => 8,
				"nota3" => 6
            ),
            array( 
				"studentName" => "Ester Quintanilla", 
                "nota1" => 5,
				"nota2" => 7,
				"nota3" => 9 
            ),
            array( 
               "studentName" => "Victor Quesada", 
                "nota1" => 10,
				"nota2" => 9,
				"nota3" => 10
            ),
            array( 
                "studentName" => "Patricia Lopez", 
                "nota1" => 7,
				"nota2" => 2,
				"nota3" => 9
            ),
            array( 
                "studentName" => "Nahuel Medina", 
                "nota1" => 6,
				"nota2" => 8,
				"nota3" => 7
            ),
            array( 
				"studentName" => "Karina Urrutia", 
                "nota1" => 6,
				"nota2" => 9,
				"nota3" => 7 
            ),
            array( 
                "studentName" => "Marta Bonilla", 
                "nota1" => 9,
				"nota2" => 7,
				"nota3" => 6 
            ),
            array( 
                "studentName" => "Veronica Garcia", 
                "nota1" => 7,
				"nota2" => 9,
				"nota3" => 8
            ),
            array( 
                "studentName" => "Carlos Vargas", 
                "nota1" => 6,
				"nota2" => 7,
				"nota3" => 9 
            )
        );
    ?>
   
    <h4 class="text-center wow fadeInRight animated" data-wow-delay=".5s"><b>Las notas promedio son de:</b><?=round($promedio, 2)?></h4>

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
