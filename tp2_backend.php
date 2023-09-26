<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2</title>
</head>

<body>
    <h1>Crear una variable n y validar que sea un número positivo.</h1>
    <p>el numero elegido es "11"</p>
    <?php
        $num1 = 11;
    if ($num1 >= 0) {
        echo $num1. " es un numero positivo";
    }
    
    ?>

    <hr>
    <h2> Crear una variable n y validar que sea un número mayor a 1 y menor a 10</h2>
    <p>el numero elegido es 6</p>
    <?php
        $num2 = 6;
        if ($num2 >1 && $num2 <10){
            echo "Este numero es menor  que 10 y mayor a  1";
        }
    ?>

    <hr>
    <h3>Crear una variable n y validar que sea un número mayor a 10 o menor a 2</h3>
    <p>el numero elegido es 46</p>
    <?php
        $num3 = 46;
        if ($num3 >10){
            echo "el numero es mayor a 10";
        }
        elseif ($num3 <2){
            echo "el numero es menor a 2";
        }
    ?>

    <hr>
    <h4>Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h4>
<p>en la primera operacion el numero 1 es "12" y el numero 2 es "8"</p>
<p>en la segunda operacion el numero 1 es "1" y el numero 2 es "5"</p>
<?php
    $numero1 = 12;
    $numero2 = 8;

    if ($numero1 > $numero2){
        echo "la suma de estos numeros es: ". $numero1 + $numero2. "<br>";
        echo "la resta de estos numeros es: ". $numero1 - $numero2;
    }
    elseif ($numero2 > $numero1){
        echo "la multiplicacion de estos numeros es: ". $numero2 * $numero1;
        echo "La division de estos numeros es: ", $numero2 / $numero1. "<br>";
        echo "El resto de la division completa es: ". $numero2 % $numero1. "<br>";
    }
    elseif ($numero1 == $numero2){
        echo "los numeros son iguales";
    }

?>
</body>
</html>