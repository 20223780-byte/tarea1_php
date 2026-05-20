<?php
$num =$_POST['numero1'];
$residuo = $num % 2;
if ($residuo == 0) {
    echo "el numero es par";
} 
if ($residuo == 1) {
    echo "el numero es impar";
}
?>