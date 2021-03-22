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
    <title>Ejercicio 2</title>
</head>
<body>
    <!-- DESARROLLO DEL EJERCICIO -->
    <!-- Se agrega un titulo y la descripcion del ejercicio -->
    <div class="team" style="background-color:#2DCB74;">
        <div class="container">
            <div class="popular-heading team-heading">
            <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Ejercicio 5</h3>
            <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;">Escriba una función que reciba como argumentos n cantidad de números, 
            la salida deberá mostrar la suma de los números.</h2>
            </div>
        </div>
    </div>
    <br>
    <!-- Se crea un input donde el usuario va a ingresar la cantidad de numeros que va a sumar -->
    <div class="wow fadeInUp animated text-center" data-wow-delay=".5s" >
                <h2>Ingresar cantidad de números a sumar</h2>
                <form method="POST" action="ejercicio5.php" > 
                <input type="number"  name="cantInputs" required>
                <!-- Boton de Generar-->
                <Input type="submit" name="" value="GENERAR">
            </form>
            <br>
            
            
            <!-- Para la cantidad de numeros que va a sumar se crea un input -->
            <form action="ejercicio5.php" method="POST">
                <?php if(isset($_POST['cantInputs']))  { ?> 
                <h3>Ingrese los numeros a sumar:</h3>
                <?php for ($i=1; $i <= $_POST['cantInputs']; $i++) { ?>
                <input type="number" name="numeros[]" placeholders="numero" required><br>
                <?php } ?>
                <?php } ?>
                <?php if(isset($_POST['cantInputs']))  { ?>
                <br/>
                <input type="submit" value="SUMAR" required>
                <?php } ?>
            </form>
            
    </div>
 
    
    <br/>
    <!-- //FIN DEL EJERCICIO -->

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s" body style="background-color:#2DCB74;">
		<p class= "text-center">© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
