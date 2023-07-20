<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/style_almacenes.css">
    <title>Almacenes en el sistema</title>
    
</head>
<body>

<table id="tablaAlmacen">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Calle</th>
        <th>Longitud</th>
        <th>Latitud</th>
        <th>Numero</th>   
        <th>Ciudad</th> 
        <th>Eliminar</th>
      </tr>
    </thead>
  </table>

<script>
  const tablaAlmacen = document.getElementById('tabla-almacen');


  function eliminarAlmacen(id) {
    fetch(`http://127.0.0.1:8002/api/APIEliminarAlmacen/${id}`, {
      method: 'DELETE',
      headers:{
             "Authorization": localStorage.getItem('token')
             
            }
    })
      .then(response => response.json())
      .then(data => {
        alert('Esta seguro de borrar este dato?');       
        cargarTablaAlmacen();
      })
      .catch(error => {
        console.error('Error al eliminar el almacén:', error);
      });
  }

  
  function cargarTablaAlmacen() {
    fetch('http://127.0.0.1:8002/api/APIlistarAlmacen', {
      headers: {
        "Authorization": localStorage.getItem('token')
      }
    })
    .then(response => response.json())
    .then(data => {    
      const tablaAlmacen = document.getElementById('tablaAlmacen');

      data.forEach(item => {
        const fila = document.createElement('tr');

        const idCelda = document.createElement('td');
        idCelda.textContent = item.id;
        fila.appendChild(idCelda);

        const nombreCelda = document.createElement('td');
        nombreCelda.textContent = item.nombre;
        fila.appendChild(nombreCelda);

        const calleCelda = document.createElement('td');
        calleCelda.textContent = item.calle;
        fila.appendChild(calleCelda);

        const longitudCelda = document.createElement('td');
        longitudCelda.textContent = item.longitud;
        fila.appendChild(longitudCelda);

        const latitudCelda = document.createElement('td');
        latitudCelda.textContent = item.latitud;
        fila.appendChild(latitudCelda);

        const numeroCelda = document.createElement('td');
        numeroCelda.textContent = item.numero;
        fila.appendChild(numeroCelda);

        const ciudadCelda = document.createElement('td');
        ciudadCelda.textContent = item.ciudad;
        fila.appendChild(ciudadCelda);

  
 
        const eliminarCelda = document.createElement('td');
        const eliminarEnlace = document.createElement('a');
        eliminarEnlace.textContent = 'Eliminar';
        eliminarEnlace.href = 'http://127.0.0.1:8000/ListarAlmacen';

        eliminarEnlace.addEventListener('click', () => eliminarAlmacen(item.id));
        eliminarCelda.appendChild(eliminarEnlace);
        fila.appendChild(eliminarCelda);
        tablaAlmacen.appendChild(fila);
      
      });
    })
    .catch(error => {
      console.error('Error al obtener los datos:', error);
    });
  }

  
  cargarTablaAlmacen();
</script>
</body>
</html>