<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- CSS personalizado --> 
        <link rel="stylesheet" href="<?=base_url('css/main.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('datatables/datatables.min.css')?>">
    <!--datables estilo bootstrap 4 CSS-->  
        <link rel="stylesheet"  type="text/css" href="<?=base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')?>">        
    <!--font awesome con CDN-->  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        <link rel="stylesheet" href="<?=base_url('css/jquery.dataTables.min.css')?>">    

    
    <link rel="shortcut icon" href="img/icono.png">
    <title>POS - Clientes</title>
</head>

<body>
        <!-- Título de Pantalla -->
        <table align="center">
           <tr> <td> <div class="card text-bg-dark mb-3 mb-3" style="max-width: 540px;">
              <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/cliente.png" class="img-fluid rounded-start">
                  </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">En esta sección puede ingresar los datos de cliente.</p>
                     <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_ventas')?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i>  Regresar</a></small>
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Nuevo</button></p>
                 </div>
              </div>
            </div>
            </div> </td>
         </table>


   <!--***************** Programa Principal ************* -->
    <div class="container">
          <!-- Muestra el listado de usuarios que contiene la BD -->
        <table class="table table-striped table-hover" id="dataTable" autocomplete="off">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>NIT</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Correo Electronico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clientesDb as $cliente) :
                ?>
                    <tr>
                        <td><?= $cliente['idcliente']; ?></td>
                        <td><?= $cliente['nombre_cliente']; ?></td>
                        <td><?= $cliente['nit_cliente']; ?></td>
                        <td><?= $cliente['telefono_cliente']; ?></td>
                        <td><?= $cliente['direccion_cliente']; ?></td>
                        <td><?= $cliente['email_cliente']; ?></td>
                        
                        <td>
                            <a href="<?= base_url('datos_clientes/'.$cliente['idcliente'])?>">
                            <i class="fa-solid fa-pencil"></i></a>  
                            <a href="<?= base_url('eliminar_clientes/'.$cliente['idcliente'])?>">
                            <i class="fa-solid fa-trash-can"></i></a> 
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <!-- Modal de la ventana emergente de ingreso de datos -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingreso de Nuevo Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_clientes') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idcliente" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idcliente" placeholder="Ingrese código" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre_cliente" class="form-label">Nombre del Cliente</label>
                                <input type="text" class="form-control" name="txt_nombre_cliente" placeholder="Ingrese nombre del cliente" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nit_cliente" class="form-label">Numero de NIT</label>
                                <input type="text" class="form-control" name="txt_nit_cliente" placeholder="Ingrese el NIT del cliente" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_telefono_cliente" class="form-label">Numero de telefono</label>
                                <input type="text" class="form-control" name="txt_telefono_cliente" placeholder="Numero Telefono del cliente" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_direccion_cliente" class="form-label">Direccion del cliente</label>
                                <input type="text" class="form-control" name="txt_direccion_cliente" placeholder="Domicilio del cliente" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_email_cliente" class="form-label">Correo electronico</label>
                                <input type="text" class="form-control" name="txt_email_cliente" placeholder="nombre@dominio.com" require>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary form-control" name="btn_guardar" value="Guardar Usuario">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>                        
                    </div>
                </div>
            </div>
        </div>


  
    </div>
    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <!-- datatables JS -->
        <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js')?>"></script>
    <!-- para usar botones en datatables JS -->  
        <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')?>"></script>  
        <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js')?>"></script>    
        <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js')?>"></script>    
        <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js')?>"></script>
        <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js')?>"></script>
   <!-- código JS propìo-->    
       <script type="text/javascript" src="<?= base_url('js/main.js')?>"></script>
</body>

</html>