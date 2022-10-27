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
  <h2 class= "text-center">Compra de Mercadería</h2>
  <h4 class= "text-center">Menu de opciones</h4>
  <p class= "text-center">Seleccione una de las opciones que se presentan.</p>

    <!-- Menú principal -->
<table align="center">
<tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/compra.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Compra de Mercadería</h5>
        <p class="card-text">En esta sección puede ingresar las compras de tus proveedores.</p>
        <p class="card-text"><small class="text-muted"><a href="<?= base_url('listar_compras') ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Compras</a></small></p>
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
        <h5 class="card-title">Acceso de Proveedores</h5>
        <p class="card-text">Acceso a la información de los proveedores.</p>
        <p class="card-text"><small class="text-muted"><a href="<?= base_url('lista_proveedores') ?>" class="btn btn-primary"><i class="fa fa-book"></i> Proveedores</a></small></p>
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
        <h5 class="card-title">Menu principal</h5>
        <p class="card-text">Regresa al menu principal.</p>
        <p class="card-text"><small class="text-muted"><a href="<?=base_url('regresar_menu')?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a></small></p>
      </div>
    </div>
  </div>
</div></td></tr>




</table>




















  



  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>