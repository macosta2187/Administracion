<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  
</head>

<body>
<style>
 
 body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #3b3f3b;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color:  #3b3f3b;
}

 </style>

  <h1>Ingrese los datos requeridos para Almacenes</h1>
  <form action="/IngresarAlmacen" method="POST">
  @csrf 
  
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="calle">Calle:</label>
    <input type="text" id="calle" name="calle" required><br><br>

    <label for="numero">Numero:</label>
    <input type="text" id="numero" name="numero" required><br><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" required><br><br>

    <label for="latitud">Latitud:</label>
    <input type="text" id="latitud" name="latitud" required><br><br>

    <label for="longitud">Longitud:</label>
    <input type="text" id="longitud" name="longitud" required><br><br>

    <input type="submit" value="Guardar">
  </form>
</body>
</html>