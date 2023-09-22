<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url("fondo.jpg");
  background-size: cover; 
  margin: 0; 
  overflow: hidden; 
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFFF;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #E8E1E1;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #F85C3D;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #333; 
  color: white; 
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 25px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-bottom: 60px; 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 12px;}
  .sidenav a {font-size: 12px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/almacenes/Ingresar">Ingreso de Almacen</a>
  <a href="/almacenes/Listar">Listar Almacenes</a>
  <a href="/empleados/Ingresar">Ingreso de Empleados</a>
  <a href="/empleados/Listar">Listar Empleados</a>
  <a href="/paquetes/Ingresar">Ingreso de Paquetes</a>
  <a href="/paquetes/Listar">Listar Paquetes</a>
  <a href="/vehiculos/Ingresar">Ingreso de Vehiculos</a>
  <a href="/vehiculos/Listar">Listar Vehiculos</a>
  <a href="/registro">Registro de usuarios</a>
</div>

<div id="main">
  <h2>Bienvenido</h2>
  <p>Sistema de control y monitoreo de paquetes</p>
  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>





</body>
</html>
