<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema POS - Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/icono.png">
  </head>
  <body>

  <!-- Titulo Principal -->
  <h2 class= "text-center">Control y Administración de Usuarios</h2>
  <h4 class= "text-center">Menu de opciones</h4>
  <p class= "text-center">Seleccione una de las opciones que se presentan.</p>


  <!-- Menú principal -->
<table align="center">
<tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/usuarios.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Permisos</h5>
        <p class="card-text">En esta sección es para el control de usuarios del sistema</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('lista_usuarios')?>" class="btn btn-primary"><i class="fa fa-user"></i> Permisos</a></small></p>
      </div>
    </div>
  </div>
</div> </td>

<td><div class="card text-bg-dark mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img height="5" src="img/proveedores.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Empleados</h5>
        <p class="card-text">Creación de nuevos empleados de la empresa.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('listar_empleados')?>" class="btn btn-primary"><i class="fa fa-users"></i> Empleados</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>


<tr> <td><div class="card text-bg-secondary mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/salir.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Regresar al menú principal</h5>
        <p class="card-text">Cierra la sesión del sistema.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('regresar_menu')?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>




</table>




















  



  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>