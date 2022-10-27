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
    <title>POS - Usuarios</title>
</head>

<body>
        <!-- Título de Pantalla -->
        <table align="center">
           <tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
              <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/usuarios.png" class="img-fluid rounded-start" alt="...">
                  </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Configuración de Permisos</h5>
                    <p class="card-text">En esta sección se adjudican los roles de los empleados dentro del sistema.</p>
                     <p class="card-text"><small class="text-muted"><a href="<?=base_url('menu_usuarios')?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a></small>
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
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuariosDb as $usuario) :
                ?>
                    <tr>
                        <td><?= $usuario['idusuario']; ?></td>
                        <td><?= $usuario['permisos']; ?></td>
                        <td>
                            <a href="<?= base_url('datos_usuarios/'.$usuario['idusuario'])?>">
                            <i class="fa-solid fa-pencil"></i></a>  
                            <a href="<?= base_url('eliminar_usuarios/'.$usuario['idusuario'])?>">
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
                        <h5 class="modal-title" id="exampleModalLabel">Ingreso de Nuevo Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_usuarios') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idusuario" placeholder="Ingrese código" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_permisos" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_permisos" placeholder="Ingrese nombre" require>
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