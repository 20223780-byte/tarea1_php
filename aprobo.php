<?php
$n1 =$_POST['nota1'];
$n2 =$_POST['nota2'];
$n3 =$_POST['nota3'];
$suma = $n1 + $n2 + $n3;
$resultado = $suma / 3;
echo "el promedio del estudiante es:" . $resultado;
?>
