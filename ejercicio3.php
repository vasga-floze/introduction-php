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
                    <p class="wow fadeInUp animated" data-wow-delay=".5s">Cree un script que muestre el siguiente array en una tabla.</p>
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


    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
