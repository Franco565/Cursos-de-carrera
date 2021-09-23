<?php
$Precio = $_POST['Precio'];
$consola = $_POST['consola'];
$cantidad = $_POST['cantidad'];
$suma = $Precio * $cantidad;
if($consola == "PS4"){
    echo "Incluye 3 juegos";
}else{
    echo "Incluye solo un control";
}
if($cantidad == "2"){
    echo "Habra un descuento del 20%";
}
if($suma > 5000000){
    echo "¡Habra un descuento del 50%!";
}elseif ($suma > 3500000){
    echo "¡Habra un descuento del 30%!";
}else{
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
    <p>Consola: <?php echo $consola?></p>
    <p>cantidad: <?php echo $cantidad;?></p>
    <p>total a pagar: <?php echo $suma;?></p>
    <a href="index.php">Clacular de nuevo</a>
</body>
</html>