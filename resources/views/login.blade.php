<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>

  <form id="login-form">
    <label for="name">name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
  
    <label for="password_confirmation">password_confirmation:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>

    <input type="submit" value="Login">
  </form>

  <script>
  document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;  
    var password_confirmation = document.getElementById('password_confirmation').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://127.0.0.1:8001/api/Login', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.error === "Credenciales incorrectas") {
            console.log(xhr.responseText);
            alert('Credenciales incorrectas. No se puede ingresar a la página.');
          } else {                     
            token = JSON.parse(xhr.responseText);         
            token = token['Authorization'];      
          
            guardarToken(token); 
            redirigirConToken(token); 
          }
        } else {
          console.log(xhr.responseText);
          alert('Login fallido');
        }
      }
    };

    var data = JSON.stringify({ name: name, email: email, password: password, password_confirmation: password_confirmation });
    xhr.send(data);
  });

  function guardarToken(token) {
    localStorage.setItem('token', token);
  }

  function redirigirConToken(token) {
    window.location.href = 'http://127.0.0.1:8000/inicio/?' + encodeURIComponent(token);
    alert(token);
  }
  </script>
</body>
</html>