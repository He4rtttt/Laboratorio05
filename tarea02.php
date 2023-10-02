<?php
    if(isset($_POST['calcular'])) {
        $precio_actual = $_POST['precio_actual'];
        $cantidad = $_POST['cantidad'];

        $nuevo_precio = $precio_actual - ($precio_actual * 0.05);
        $importe_compra = $nuevo_precio * $cantidad;
        $descuento = $importe_compra * 0.07;
        $importe_pagar = $importe_compra - $descuento;
        $obsequio = $cantidad * 2;

        
        echo "<h2>Resultados:</h2>";
        echo "Nuevo Precio de la Gaseosa: S/." . number_format($nuevo_precio, 2) . "<br>";
        echo "Importe de la Compra: S/." . number_format($importe_compra, 2) . "<br>";
        echo "Importe del Descuento: S/." . number_format($descuento, 2) . "<br>";
        echo "Importe a Pagar: S/." . number_format($importe_pagar, 2) . "<br>";
        echo "Obsequio: " . $obsequio . " caramelos";
    }
    ?>