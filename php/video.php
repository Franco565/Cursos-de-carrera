<?php
$Precio = $_POST['Precio'];
$videojuegos = $_POST['videojuegos'];
$cantidad = $_POST['cantidad'];
$div = $Precio * $cantidad;
switch ($videojuegos) {
    case "1":
      echo "Trae contenido descargable!";
      break;
    case "2":
      echo "Trae contenido descargable!";
      break;
    case "3":
      echo "Sin contenido descargable!";
      break;
      case "4":
        echo "Trae tarjeta de bonificacion!";
        break;
  }
  if($videojuegos == "1" && $Precio == 230000){
      echo "¡Llevaras un control gratis!";
  }elseif ($videojuegos == "1" && $Precio <= 230000){
      echo "El precio es incorrecto";
  }else{
  }
switch ($videojuegos) {
    case "1":
      echo "Es compatible con PS5!";
      break;
    case "2":
      echo "Es compatible con PS5!";
      break;
    case "3":
      echo "No es compatible con PS5!";
      break;
    case "4":
      echo "No es compatible con PS5!";
      break;
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
    <p>total a pagar: <?php echo $div;?></p>
    <a href="index.php">Clacular de nuevo</a>
</body>
</html>