<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema POS - Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/icono.png">
  </head>
  <body>

  <!-- Titulo Principal -->
  <h2 class= "text-center">Salida de Mercadería</h2>
  <h4 class= "text-center">Menu de opciones</h4>
  <p class= "text-center">Seleccione una de las opciones que se presentan.</p>

    <!-- Menú principal -->
<table align="center">
<tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/venta.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Ventas de Mercaderias</h5>
        <p class="card-text">En esta sección se deben realizar las ventas de productos.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('listar_ventas')?>" class="btn btn-primary"><i class="fa fa-tags"></i> Ventas</a></small></p>
      </div>
    </div>
  </div>
</div> </td>

<td><div class="card text-bg-dark mb-3 mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img height="5" src="img/cliente.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Acceso de Clientes</h5>
        <p class="card-text">Acceso a la información de los clientes.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('lista_clientes')?>" class="btn btn-primary"><i class="fa fa-list-alt"></i> Clientes</a></small></p>
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
        <p class="card-text">Visualiza nuevamente todo el menú de opciones.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('regresar_menu')?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>

</table>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>

</html>