<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1 backend</title>
</head>

<body>
    <h1>Print "Hola Mundo"</h1>
    <?php
    $mensaje = "Hola Mundo";
    echo $mensaje;
    ?>
    <hr>
    <h2>Mostrar por pantalla la suma, resta, multiplicacion, division entera y el resto de la division entera</h2>
    <p>Los numeros elegidos son "5" y "2"</p>
    <?php
    $num_a = 5;
    $num_b = 2;
    $resto = $num_a / $num_b;
    echo "La suma de estos numeros da: ". $num_a + $num_b. "<br>";
    echo "La resta de estos numeros da: ". $num_a - $num_b. "<br>";
    echo "La multiplicacion de estos numeros es: ". $num_a * $num_b. "<br>";
    echo "La division de estos numeros es: ", $num_a / $num_b. "<br>";
    echo "El resto de la division completa es: ". $num_a % $num_b. "<br>";
?>

<hr>
<h2>Transformación de grados Celsius a Fahrenheit, para el valor 20°C</h2>
<?php
    $celsius =20;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "20 grados celsius son igual a ". $fahrenheit. " grados fahrenheit.";
?>
<hr>
<h3>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h3>
<?php
    $base = 18;
    $altura = 12;
    $perimetro = 2 * ($base + $altura);
    $area = $base * $altura;

    echo "el perimetro del rectangulo es: ". $perimetro. "cm". "<br>";
    echo "el area del rectangulo es ". $area. "cm²";
?>

<hr>
<h4>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h4>
<?php
    $radio = 30;
    $perimetro = 2 * M_PI * $radio;
    $area = M_PI * pow($radio, 2);

    echo "el perimetro del circulo es: ". $perimetro. "cm"."<br>";
    echo "el área del círculo es: " . $area . " cm²";
?>
</body>
</html>