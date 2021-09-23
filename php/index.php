<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
<form action="precios.php" method="post">
      <h1>Calcular pedido</h1>
      <label for="">Producto: </label>
      <select name="Accesorio" id="">
        <option value="VR360">VR360</option>
        <option value="control">Control</option>
        <option value="audifonos">Audifonos</option>
      </select>
      <label for="">Precio: </label>
      <input type="text" name="Precio">
      <label for="">Cantidad: </label>
      <input type="text" name="cantidad">
      <input type="submit" value="Calcular">
      </form>

<form action="consolas.php" method="post">
<label for="">Producto: </label>
      <select name="consola" id="">
        <option value="PS5">PS5</a></option>
        <option value="PS4">PS4</a></option>
        </select>
      <label for="">Precio: </label>
      <input type="text" name="Precio">
      <label for="">Cantidad: </label>
      <input type="text" name="cantidad">
      <input type="submit" value="Calcular">
      </form>

      <form action="video.php" method="post">
<label for="">Producto: </label>
      <select name="videojuegos" id="">
        <option value="1">Call Of Duty</a></option>
        <option value="2">FIFA 21</a></option>
        <option value="3">GTA V</a></option>
        <option value="4">Fortnite</a></option>
        </select>
      <label for="">Precio: </label>
      <input type="text" name="Precio">
      <label for="">Cantidad: </label>
      <input type="text" name="cantidad">
      <input type="submit" value="Calcular">
      </form>

</body>
</html>