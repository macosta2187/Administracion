<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url("fondo.jpg");
  background-size: 100% 100%;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
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
  font-size: 36px;
  margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    margin-bottom: 60px; /* Igual al alto del footer */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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

</div>

<div id="main">
  <h2>Bienvenido </h2>
  <p>Sistema de control y monitoreo de paquetes</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
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