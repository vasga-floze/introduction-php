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
    <title>Ejercicio 5</title>
</head>
<body>
    <!-- Diseño -->
    <!-- Se agrega un titulo y la descripcion del ejercicio -->
    <div class="team" style="background-color:#2DCB74;">
        <div class="container">
            <div class="popular-heading team-heading">
            <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 5</h3>
            <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;" >Escriba una función que reciba como argumentos n cantidad de números, 
            la salida deberá mostrar la suma de los números.</h2>
            </div>
        </div>
    </div>
    <br>
     <!-- Se crea un input donde el usuario va a ingresar la cantidad de numeros que va a sumar -->
    <div class="wow fadeInUp animated text-center" data-wow-delay=".5s" >
                <h2>Ingresar cantidad de números a sumar</h2>
                <form method="POST" action="ejercicio5.php" > 
                <input type="text" name="cantInputs">
                <!-- Boton de Generar-->
                <Input type="submit" name="" value="GENERAR">
            </form>
            <br>
            <!-- Para la cantidad de numeros que va a sumar se crea un input -->
            <form action="ejercicio5.php" method="POST">
                <?php if(isset($_POST['cantInputs']))  { ?> 
                <?php for ($i=1; $i <= $_POST['cantInputs']; $i++) { ?>
                <input type="text" name="numeros[]" placeholders="numero"><br>
                <?php } ?>
                <?php } ?>
                <input type="submit" value="SUMAR">
            </form>
    </div>
        <!-- DESARROLLO DEL EJERCICIO -->

        <?php
        //funcion para realizar la suma del arreglo
            function calcular(){
                // se obtiene el arreglo de numeros
                $b=$_REQUEST['numeros'];
                //mediante la funcion array_sum se realiza la suma del arreglo
                echo "La suma es = " . array_sum($b) . "\n";
            }
            
            //Comprobar que 'numeros' esta definida en calcular
            if (isset($_POST['numeros'])){
                calcular();
            }
            
        ?>

        <!-- //FIN DEL EJERCICIO -->

        <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
            <p>© 2021  . Universidad Gerardo Barrios</p>
        </div>
</body>
</html>
