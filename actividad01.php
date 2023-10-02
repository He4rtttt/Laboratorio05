<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Valor 1: <br> <input type="text" name="valor1"><br>
        Ingresar Valor 2: <br> <input type="text" name="valor2"><br>
        resultado : <br> 
        <input type="submit" name="Suma" value="Suma">
    </form>
    
    <?php
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
    $suma=$numero1+$numero2;
    echo "El resultado de la suma es: ".$suma; 
    ?>

</body>
</html>