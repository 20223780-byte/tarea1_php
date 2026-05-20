<?php
$celsius = $_POST['celsius_ingresados'];
$fahrenheit = ($celsius * 1.8) + 32;

echo $celsius . " grados Celsius equivalen a: " . $fahrenheit . " grados Fahrenheit";
?>