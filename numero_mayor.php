<?php
$num1 =$_POST['numero1'];
$num2 =$_POST['numero2'];
if ($num1 > $num2) {
    $nummayor = $num1;
} else {
    $nummayor = $num2;
}

echo "el numero mayor es:" . $nummayor;
?>