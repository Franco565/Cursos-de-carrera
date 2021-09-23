<?php
$Precio = $_POST['Precio'];
$Accesorio = $_POST['Accesorio'];
$cantidad = $_POST['cantidad'];
$multiplicacion = $Precio * $cantidad;
if ($Accesorio == "VR360" or $Accesorio == "Control"){
    echo "¡Objetos en promocion, pague uno y lleve 2!";
}elseif($Accesorio == "control" && $cantidad == "2" && $Precio ==250000){
    echo "¡Daremos un descuento del 10% en tu proxima compra!";
}else{
}
if ($Accesorio == "control" && $Precio ==250000){
    echo "¡El precio es correcto!";
}elseif ($Accesorio == "control" && $Precio <=250000){
    echo "¡El precio es incorrecto!";
}elseif ($Accesorio == "control" && $Precio >=250000){
    echo "¡El precio es incorrecto!";
}else{
}
if ($cantidad == 0){
    echo "Ingrese la cantidad indicada";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Total a pagar</h1>
    <p>cantidad: <?php echo $cantidad;?></p>
    <p>total a pagar: <?php echo $multiplicacion;?></p>
    <a href="index.php">Clacular de nuevo</a>
</body>
</html>




