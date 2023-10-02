<?php
    $nhijos=$_POST["nhijos"];
    $numero2=$_POST["boni"];
    $basico=$_POST["sueldo"];
    $ventas=$_POST["ventas"];
    
    $comision=$ventas*0.075;
    $bonificacion=$nhijos*$numero2;
    $sbruto= $basico + $comision + $bonificacion;
    $descuento= $sbruto*0.11;

    echo "<h2>Resultados:</h2>";
    echo "La bonificacion es: " . $bonificacion ."soles"."<br>";
    echo "El sueldo bruto es: ". $sbruto."soles"."<br>";
    echo "La comision es de: ". $comision. "soles"."<br>";
    echo "El descuento es de: ". $descuento. "soles"."<br>";
    
    
?>
