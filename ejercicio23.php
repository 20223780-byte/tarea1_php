<?php

$precio=$_POST['precio'];

// Usando el 13% de IVA estándar
$iva=$precio*0.13;
$total=$precio+$iva;

echo "El precio con IVA incluido es: $".$total;

?>