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
    <title>Ejercicio 3</title>
</head>
<body>
    <!-- DESARROLLO DEL EJERCICIO -->

    <div class="team" body style="background-color:#2DCB74;">
        <div class="container">
                <div class="popular-heading team-heading">
                    <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 3</h3>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;">Cree un script que muestre el siguiente array en una tabla.</h2>
                </div>
                <div class=" team-heading">
                    <img src="images/tres.jpg" class="img-thumbnail wow fadeInRight animated" alt="100px" >
                </div>
        </div>
    </div>

    <?php
            /* Cree un script que muestre el siguiente array en una tabla.*/
            $datos = array(
               array( 
                    "nombre" => "Francisco Garcia", 
                    "telefono" => "79896321", 
                    "correo" => "fgarcia@gmail.com" 
                ),
               array( 
                   "nombre" => "Manuel Salinas",
                   "telefono" => "63254178", 
                   "correo" => "msalinas@gmail.com" 
                ),
               array(
                    "nombre" => "Johana Melara",
                    "telefono" => "76325799",
                    "correo" => "jmelara@gmail.com"
               )
            );
        ?>


        <div class="container text-center">
        <div class="text-center wow fadeInLeft">
            <h3>AGENDA</h3>
        </div>

        <!--Tabla -->
        <table class="table table-bordered table-dark wow fadeInRight animated" data-wow-delay=".5s" >
            <!--encabezado de la tabla-->
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col"><h3>Nombre</h3></th>
                <th scope="col"><h3>Teléfono</h3></th>
                <th scope="col"><h3>Correo</h3></th>
                </tr>
            </thead>
            <tbody>
                <!--primer registro de la tabla-->
                <tr>
                <th scope="row">1</th>
                <!--el nombre del array: $datos, 
                el indice del primer array interior: [0]
                el key a mostrar dentro de ese array ["nombre"] 
                Y asi sucesivamente con cada key-->
                <td><h4><?=$datos[0]["nombre"];?></h4></td>
                <td><h4><?=$datos[0]["telefono"];?></h4></td>
                <td><h4><?=$datos[0]["correo"];?></h4></td>
                </tr>
                <!--segundo registro de la tabla-->
                <tr>
                <th scope="row">2</th>
                <td><h4><?=$datos[1]["nombre"];?></h4></td>
                <td><h4><?=$datos[1]["telefono"];?></h4></td>
                <td><h4><?=$datos[1]["correo"];?></h4></td>
                </tr>
                <!--tercer registro de la tabla-->
                <tr>
                <th scope="row">3</th>
                <td><h4><?=$datos[2]["nombre"];?></h4></td>
                <td><h4><?=$datos[2]["telefono"];?></h4></td>
                <td><h4><?=$datos[2]["correo"];?></h4></td>
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
