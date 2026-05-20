<?php
$n1 =$_POST['num1'];
$n2 =$_POST['num2'];
$n3 =$_POST['num3'];
$suma = $n1 + $n2 + $n3;
$resultado = $suma / 3;

 echo "el promedio final es:" . $resultado;
 echo "<br><br>";

 if ($resultado >= 6) {
    echo "aprobado";
 } 
    if ($resultado < 6) {
        echo "reprobado";
}
    ?>