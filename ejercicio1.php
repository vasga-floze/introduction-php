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
<div class="team">
      <div class="container">
        <div class="popular-heading team-heading">
          <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Calculadora</h3>
          <p class="wow fadeInUp animated" data-wow-delay=".5s">Escriba un programa que realice las operaciones básicas (suma, resta, multiplicación, división),
           deberá crear un formulario para procesarlos valoresingresados por el usuario, haga uso deun control combo box para seleccionar la operación a realizar.</p>
        </div>
                </div>
            </div>
        </div>
<br>

 <!-- DISEÑO DE LA CALCULADORA  -->
<form method="post" action="ejercicio1.php" class="text-center">
    <div class="form-group">
    <label for="num1">Ingrese el primer número</label><br>
    <input type="text" name="num1"/>
	</div>

	<div class="form-group">
	<label for="num2">Ingrese el segundo número</label><br>
    <input type="text" name="num2"/>
	</div>

 <!-- COMBO BOX -->
    <div class="form-group">
	<label for="num2">Seleccionar la operación</label><br>
	<select name="opciones">
        <option value="0">Sumar</option>
        <option value="1">Restar</option>
        <option value="2">Multiplicar</option>
        <option value="3">Dividir</option>
    </select><br>
	</div>

<input class="btn btn-primary" type="submit" name="calcular" value="Calcular">


</form>

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
if(isset($_REQUEST['calcular'])){
    $n1=$_REQUEST['num1'];
    $n2=$_REQUEST['num2'];
    $op=$_REQUEST['opciones'];

//estructura condicionale switch recibe variable op del combo box
    switch($op){
        case 0:echo "<div align='center'>La suma de $n1 + $n2 es = ".opera::sumar($n1, $n2);break;
        case 1:echo "<div align='center'>La resta de $n1 - $n2 es = ".opera::restar($n1, $n2);break;
        case 2:echo "<div align='center'>La multiplicación de $n1 * $n2  es = ".opera::multiplicar($n1, $n2);break;
        case 3:echo "<div align='center'>La división de $n1 / $n2 es = ".opera::dividir($n1, $n2);break;

    }
}
?>

    <!-- //FIN DEL EJERCICIO -->

    <div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
		<p>© 2021  . Universidad Gerardo Barrios</p>
	</div>
</body>
</html>
