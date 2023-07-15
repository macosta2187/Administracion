<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <style>

body {
  font-family: Arial, sans-serif;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  transition: border-color 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
  border-color: #5f9ea0;
}

input[type="submit"] {
  background-color: #5f9ea0;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #3a7d80;
}

nav {
  background-color: #333;
  color: #fff;
  padding: 10px;
  display: flex;
  justify-content: space-between;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin-left: 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
}
</style>
<nav>
    <ul>
      <li><a href="/salir">Logout</a></li>
      <li><a href="/index">Dashboard</a></li>
      <li><a href="/registro">Register</a></li>
    </ul>
  </nav>
</head>
<body>
  <form method="post" action="/registrar">
    @csrf 
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required>
  
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
  
    <label for="password_confirmation">Confirmar Contraseña:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
  
    <input type="submit" value="Registrarse">
  </form>
</body>
</html>