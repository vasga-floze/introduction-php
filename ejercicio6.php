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

    };

        ?>

    <!-- //FIN DEL EJERCICIO -->
    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
