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
            <tbody>
                <!--primer registro de la tabla-->
                <tr>
                <th scope="row">1</th>
                <!--el nombre del array: $students, 
                el indice del primer array interior: [0]
                el key a mostrar dentro de ese array ["studentName"] 
                Y asi sucesivamente con cada key-->
                <td><h4><?=$students[0]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[0]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[0]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[0]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
                <!--segundo registro de la tabla-->
                <tr>
                <th scope="row">2</th>
                <td><h4><?=$students[1]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[1]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[1]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[1]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></td>
                <!--tercer registro de la tabla-->
                <tr>
                <th scope="row">3</th>
                <td><h4><?=$students[2]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[2]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[2]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[2]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
                <!--cuarto registro de la tabla-->
                <tr>
                <th scope="row">4</th>
                <td><h4><?=$students[3]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[3]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[3]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[3]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
                <!--quinto registro de la tabla-->
                <tr>
                <th scope="row">5</th>
                <<td><h4><?=$students[4]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[4]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[4]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[4]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
                <!--sexto registro de la tabla-->
                <tr>
                <th scope="row">6</th>
                <td><h4><?=$students[5]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[5]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[5]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[5]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></td>
                </tr>
                <!--septimo registro de la tabla-->
                <tr>
                <th scope="row">7</th>
                <td><h4><?=$students[6]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[6]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[6]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[6]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
				<tr>
                <th scope="row">8</th>
                <td><h4><?=$students[7]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[7]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[7]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[7]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
				<tr>
                <th scope="row">9</th>
				<td><h4><?=$students[8]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[8]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[8]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[8]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></h4></td>
                </tr>
				<tr>
                <th scope="row">10</th>
                <td><h4><?=$students[9]["studentName"];?></h4></td>
				<td><h4><?=$n1 =$students[9]["nota1"];?></h4></td>
				<td><h4><?=$n2 =$students[9]["nota2"];?></h4></td>
				<td><h4><?=$n3 =$students[9]["nota3"];?></h4></td>
				<td><h4><?=round((($n1+$n2+$n3)/3),2);?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- //FIN DE LA TABLA-->

    <!--Calcular notas promedio-->
    <?
        $suma = 0;
        for($i=0;$i<11;$i++)
        {
           //sumar salario, acumulando en cada iteración 
            $n1 +=  ($students[$i]["nota1"]);
			$n2 +=  ($students[$i]["nota2"]);
			$n3 +=  ($students[$i]["nota3"]);
        }
        //echo $n1 . "<br/>"; //comprobar la suma de notas 

        //calcular promedio que es igual a la suma de las notas entre cantidad de notas
        $promedio1 = ($n1)/$i;
		$promedio2 = ($n2)/$i;
		$promedio3 = ($n3)/$i;
		$promedio = ($promedio1+$promedio2+$promedio3)/$i;    
		?>
    <h4 class="text-center wow fadeInRight animated" data-wow-delay=".5s"><b>Las notas promedio son de:</b><?=round($promedio, 2)?></h4>

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
