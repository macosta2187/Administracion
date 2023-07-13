<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">    
    <link rel="stylesheet" href="style_menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  </head>
  <body>
    
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Administracion</header>
      <a href="/IngresarAlmacen" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Almacenes</span>
      </a>
      <a href="/ListarAlmacen">
        <i class="fas fa-link"></i>
        <span>Ver Almacenes</span>
      </a>
      <a href="/IngresarProducto">
        <i class="fas fa-stream"></i>
        <span>Producto</span>
      </a>
      <a href="/ListarProducto">
         <i class="fas fa-calendar"></i>
        <span>Ver Producto</span>
      </a>
      <a href="/listarCamionero">
      <i class="fas fa-stream"></i>
        <span>Ver Camioneros</span>
      </a>
      <a href="/producto">
        <i class="fas fa-sliders-h"></i>
        <span>Productos</span>
      </a>
      <a href="/listarProductos">
      <i class="fas fa-stream"></i>
        <span>Ver Productos</span>
      </a>
      <a href="#">
        <i class="fas fa-sliders-h"></i>
        <span>Crear Envio</span>
      </a>
    </div>

  </body>
</html>