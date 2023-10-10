<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3</title>
</head>
<h1>mostrar numeros del 1 al 100</h1>
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
?>

<hr>

<h2>mostrar numeros del 100 al 1</h2>
<?php
for ($i = 100; $i >= 1; $i--) {
    echo $i . " ";
}
?>

<hr>

<h3>mostrar los numeros pares del 1 al 100</h3>
<?php
for ($i = 2; $i <= 100; $i+=2){
    echo $i . " ";
}
?>

<hr>

<h4>mostrar numeros impares del 1 al 100</h4>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

<hr>

<h5>mostrar la suma de los numeros del 1 al 20</h5>
<?php
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
echo "La suma de los números del 1 al 20 es: " . $suma;
?>

<hr>

<h6>mostrar la suma de los numeros pares del 1 al 20</h6>
<?php
$suma = 0;

for ($i = 2; $i <= 20; $i += 2) {
    $suma += $i;
}

echo "La suma de los números pares del 1 al 20 es: " . $suma;
?>
</body>
</html>