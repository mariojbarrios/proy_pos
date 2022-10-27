<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema POS - Menu Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/icono.png">
  </head>
  <body>

  <!-- Titulo Principal -->


  <h2 class= "text-center">Bienvenidos al Sistema POS</h2>
  <h4 class= "text-center">Menu de opciones</h4>
  <p class= "text-center">Seleccione una de las opciones que se presentan.</p>




  <!-- Menú principal -->
<table align="center">
<tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/compras.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Ingreso de Mercaderia</h5>
        <p class="card-text">Accede a las compras de mercadería y los datos de los proveedores.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_compras')?>" class="btn btn-primary"><i class="fa fa-tags"></i> Ingreso</a></small></p>
      </div>
    </div>
  </div>
</div> </td>

<td><div class="card text-bg-dark mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img height="5" src="img/ventas.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Salida de Mercadería</h5>
        <p class="card-text">Realiza el proceso de facturación y el acceso a la información de sus clientes.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_ventas')?>" class="btn btn-primary"><i class="fa fa-credit-card"></i> Salidas</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>


<tr> <td> <div class="card text-bg-success mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/inventario.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Existencias de Productos</h5>
        <p class="card-text">Revisa la existencia de los inventarios e ingreso de nuevos productos.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('lista_inventarios')?>" class="btn btn-primary"><i class="fa fa-barcode"></i> Inventario</a></small></p>
      </div>
    </div>
  </div>
</div> </td>

<td><div class="card text-bg-danger mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/usuarios.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Control de Usuarios</h5>
        <p class="card-text">Accede a los permisos y asignación de usuarios.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_usuarios')?>" class="btn btn-primary"><i class="fa fa-user"></i> Usuarios</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>

<tr> <td> <div class="card text-bg-dark mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/nosotros.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nosotros</h5>
        <p class="card-text">Conoce a los programadores del proyecto.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_nosotros')?>" class="btn btn-primary"><i class="fa fa-users"></i> Equipo Creativo</a></small></p>
      </div>
    </div>
  </div>
</div> </td>

<td><div class="card text-bg-secondary mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/salir.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Regresar al menú principal</h5>
        <p class="card-text">Visualiza nuevamente todo el menú de opciones.</p>
        <p class="card-text"><small class="text-muted"><a href=<?=base_url('cerrar_sesion')?> class="btn btn-primary"><i class="fa fa-power-off"></i> Cerrar Sesion</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>

</html>