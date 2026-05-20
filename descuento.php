<?php

$monto = $_POST['monto_compra'];

if ($monto >= 100) {
    $descuento = $monto * 0.20;
} else {
    $descuento = $monto * 0.10;
}

$total = $monto - $descuento;

echo "<h2>Resultado de la Compra</h2>";
echo "Monto de compra: $" . $monto . "<br>";
echo "Descuento aplicado: $" . $descuento . "<br>";
echo "Total a pagar: $" . $total;

?>