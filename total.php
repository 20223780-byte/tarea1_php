<?php
$empleado =$_POST['nombre'];
$hora =$_POST['horas'];
$pago =$_POST['pago'];
$salario =$hora * $pago;
echo "el empleado: " . $empleado . "tiene un salario de: " . $salario;