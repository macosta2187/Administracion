<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Formulario</title>

  
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    color: #333;
    line-height: 1.6;
    padding: 20px;
  }


  h1 {
    text-align: center;
    margin-bottom: 20px;
   
  }

 
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;   
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }


  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #b93632;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0056b3; 
  }





  a {
    color: #007bff; 
    text-decoration: none;
  }

</style>

  
</head>

<body>

  <h1>Ingrese Productos</h1>
  <form action="/IngresarProducto" method="POST">
  @csrf 
  
    <label for="descripcion">Descripcion:</label>
    <input type="text" id="descripcion" name="descripcion" required><br><br>

    <label for="calle">Calle:</label>
    <input type="text" id="calle" name="calle" required><br><br>

    <label for="numero">Numero:</label>
    <input type="text" id="numero" name="numero" required><br><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" required><br><br>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
    <option value="admitido">Admitido</option>
    <option value="entregado">Entregado</option>
    <option value="administrado">Administrado</option>
</select><br><br>

    <label for="id_lote">Id Lote:</label>
    <input type="text" id="id_lote" name="id_lote" required><br><br>

    <input type="submit" value="Guardar">
  </form>
</body>
</html>