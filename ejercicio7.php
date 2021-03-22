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
    <!--Mostrar los datos del array en una tabla-->
    <div class="container text-center">
        <div class="text-center wow fadeInLeft">
            <h3>LISTADO ESTUDIANTES</h3>
        </div>

        <!--Tabla -->
        <table class="table table-bordered table-dark wow fadeInRight animated" data-wow-delay=".5s" >
            <!--encabezado de la tabla-->
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col"><h3>Nombre</h3></th>
                <th scope="col"><h3>Nota 1</h3></th>
                <th scope="col"><h3>Nota 2</h3></th>
				<th scope="col"><h3>Nota 3</h3></th>
				<th scope="col"><h3>Promedio Final</h3></th>
				<th scope="col"><h3>Estado</h3></th>
                </tr>
            </thead>
			<!--//encabezado de la tabla-->

    <!--Calcular notas promedio-->
    <?
	//agrega funcion
	function calcular(array $students){
		for($i=0;$i<count($students);$i++)
        {
			echo "<tr>";
			echo "<td>" . $i+1 . "</td>";
			echo "<td>". $students[$i]["studentName"] . "</td>";
			echo "<td>". $students[$i]["nota1"]. "</td>";
			echo "<td>". $students[$i]["nota2"]. "</td>";
			echo "<td>". $students[$i]["nota3"]. "</td>";

			$promedio=($students[$i]["nota1"]+$students[$i]["nota2"]+$students[$i]["nota3"])/3;
			echo "<td>".round($promedio,2). "</td>";

			if($promedio>=7){
				echo "<td>Aprobado</td>";
			}else{
				echo "<td>Reprobado</td>";
			}
			
			echo "</tr>";
			

        } 
		echo "</table>";
	}
	//llamado a funcion
	calcular($students);
        
	?>
	</div>
    <div class="copyright wow fadeInUp animated text-center" data-wow-delay=".5s"  body style="background-color:#2DCB74;">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
