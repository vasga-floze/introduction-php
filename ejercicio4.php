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
                "salario" => 3500 
            ),
            array( 
                "departamento" => "Contabilidad ", 
                "empleado" => "Alberto Canizales", 
                "salario" => 2000 
            ),
            array( 
                "departamento" => "Finanzas", 
                "empleado" => " Maria Gomez", 
                "salario" => 2500 
            ),
            array( 
                "departamento" => "Gerencia", 
                "empleado" => " Anastacia Rivera", 
                "salario" => 3000 
            ),
            array( 
                "departamento" => "Finanzas", 
                "empleado" => "Bladimir Romero", 
                "salario" => 1000 
            ),
            array( 
                "departamento" => "Contabilidad ", 
                "empleado" => "Andrea Robles", 
                "salario" => 3000 
            ),
            array( 
                "departamento" => "R.R.H.H", 
                "empleado" => "Carmen Rosales", 
                "salario" => 1500 
            )
        );
    ?>
    <!--Mostrar los datos del array en una tabla-->
    <div class="container text-center">
        <div class="text-center wow fadeInLeft">
            <h3>EMPLEADOS</h3>
        </div>

        <!--Tabla -->
        <table class="table table-bordered table-dark wow fadeInRight animated" data-wow-delay=".5s" >
            <!--encabezado de la tabla-->
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col"><h3>Departamento</h3></th>
                <th scope="col"><h3>Empleado</h3></th>
                <th scope="col"><h3>Salario</h3></th>
                </tr>
            </thead>
            <tbody>
                <!--primer registro de la tabla-->
                <tr>
                <th scope="row">1</th>
                <!--el nombre del array: $datos, 
                el indice del primer array interior: [0]
                el key a mostrar dentro de ese array ["departamento"] 
                Y asi sucesivamente con cada key-->
                <td><h4><?=$employees[0]["departamento"];?></h4></td>
                <td><h4><?=$employees[0]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[0]["salario"];?></h4></td>
                </tr>
                <!--segundo registro de la tabla-->
                <tr>
                <th scope="row">2</th>
                <td><h4><?=$employees[1]["departamento"];?></h4></td>
                <td><h4><?=$employees[1]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[1]["salario"];?></h4></td>
                </tr>
                <!--tercer registro de la tabla-->
                <tr>
                <th scope="row">3</th>
                <td><h4><?=$employees[2]["departamento"];?></h4></td>
                <td><h4><?=$employees[2]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[2]["salario"];?></h4></td>
                </tr>
                <!--cuarto registro de la tabla-->
                <tr>
                <th scope="row">4</th>
                <td><h4><?=$employees[3]["departamento"];?></h4></td>
                <td><h4><?=$employees[3]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[3]["salario"];?></h4></td>
                </tr>
                <!--quinto registro de la tabla-->
                <tr>
                <th scope="row">5</th>
                <td><h4><?=$employees[4]["departamento"];?></h4></td>
                <td><h4><?=$employees[4]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[4]["salario"];?></h4></td>
                </tr>
                <!--sexto registro de la tabla-->
                <tr>
                <th scope="row">6</th>
                <td><h4><?=$employees[5]["departamento"];?></h4></td>
                <td><h4><?=$employees[5]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[5]["salario"];?></h4></td>
                </tr>
                <!--septimo registro de la tabla-->
                <tr>
                <th scope="row">7</th>
                <td><h4><?=$employees[6]["departamento"];?></h4></td>
                <td><h4><?=$employees[6]["empleado"];?></h4></td>
                <td><h4>$<?=$employees[6]["salario"];?></h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- //FIN DE LA TABLA-->


    <!-- //FIN DEL EJERCICIO -->

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
