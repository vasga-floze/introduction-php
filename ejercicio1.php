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
    <title>Ejercicio 1</title>
</head>

<body>
    <div class="team" body style="background-color:#2DCB74;">
        <div class="container">
            <div class="popular-heading team-heading">
                <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Calculadora</h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".5s" style="color:#ffffff;">Escriba un programa que realice las operaciones básicas (suma, resta, multiplicación, división),
                deberá crear un formulario para procesar los valores ingresados por el usuario, haga uso de un control combo box para seleccionar la operación a realizar.</h2>
            </div>
        </div>
    </div>
    <br/>

    <!-- DISEÑO DE LA CALCULADORA  -->
    <div class="container wow fadeInRight animated">
        <form method="post" action="ejercicio1.php" class="text-center">
            <div class="form-group">
            <label for="num1"><h3>Ingrese el primer número</h3></label><br>
            <input type="number" name="num1" class="form-control"/>
            </div>

            <div class="form-group">
            <label for="num2"><h3>Ingrese el segundo número</h3></label><br>
            <input type="number" name="num2"class="form-control"/>
            </div>

        <!-- COMBO BOX -->
            <div class="form-group">
                <label for="num2"><h3>Seleccionar la operación</h3></label><br/>
                <select name="opciones">
                    <option value="0"><h3>Sumar</h3></option>
                    <option value="1"><h3>Restar</h3></option>
                    <option value="2"><h3>Multiplicar</h3></option>
                    <option value="3"><h3>Dividir</h3></option>
                </select><br>
            </div>

            <input class="btn btn-primary btn-lg" type="submit" name="calcular" value="Calcular">
            <hr>
        </form>
    </div>
    <!-- DESARROLLO DEL EJERCICIO -->

<?php

    //Se crea la clase opera para realizar las cuatro operaciones
        class opera{
            public static function sumar($numero1, $numero2){
                $suma=$numero1+$numero2;
                return $suma;
            }
            public static function restar($numero1, $numero2){
                $resta=$numero1-$numero2;
                return $resta;
            }
            public static function multiplicar($numero1, $numero2){
                $multi=$numero1*$numero2;
                return $multi;
            }
            public static function dividir($numero1, $numero2){
                $divi=$numero1/$numero2;
                return $divi;

            }
           
        }
    //capturar las variables de calcular
    if(isset($_REQUEST['calcular']))
    {
            $n1=$_REQUEST['num1'];
            $n2=$_REQUEST['num2'];
            $op=$_REQUEST['opciones'];

            //estructura condicionale switch recibe variable op del combo box
            if($n1 == "" or $n2 == "")
                {
                    $n1 = 0;
                    $n2 = 0;
                    echo "<div class='text-center alert alert-danger' role='alert'><h4>Debes escribir ambos números para obtener un resultado</h4></div>";
                    "<hr>";
                }else{
                    switch($op){
                        case 0:echo "<h3 align='center'>La suma de $n1 + $n2 es = ".opera::sumar($n1, $n2);break;
                        case 1:echo "<h3 align='center'>La resta de $n1 - $n2 es = ".opera::restar($n1, $n2);break;
                        case 2:echo "<h3 align='center'>La multiplicación de $n1 * $n2  es = ".opera::multiplicar($n1, $n2);break;
                        case 3:echo "<h3 align='center'>La división de $n1 / $n2 es = ".opera::dividir($n1, $n2);break;
        
                    }
                }
            
    }
?>

    <!-- //FIN DEL EJERCICIO -->

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s" body style="background-color:#2DCB74;">
		<p class= "text-center">© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
