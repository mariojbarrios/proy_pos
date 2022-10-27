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
    <title>POS - Ventas</title>
</head>

<body>
        <!-- Título de Pantalla -->
        <table align="center">
           <tr> <td> <div class="card text-bg-warning mb-3" style="max-width: 540px;">
              <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/venta.png" class="img-fluid rounded-start" alt="...">
                  </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Entrada de Mercaderias</h5>
                    <p class="card-text">Ingreso de ventas al sistema.</p>
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
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Tipo de Pago</th>
                    <th>Documento</th>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ventasDb as $venta) :
                ?>
                    <tr>
                        <td><?= $venta['idventas']; ?></td>
                        <td><?= $venta['fecha_venta']; ?></td>
                        <td><?= $venta['descripcion']; ?></td>
                        <td><?= $venta['venta']; ?></td>
                        <td><?= $venta['cantidad']; ?></td>
                        <td><?= $venta['tipo_pago']; ?></td>
                        <td><?= $venta['documento']; ?></td>
                        <td><?= $venta['nombre_cliente']; ?></td>
                        <td><?= $venta['nombre_empleado']; ?></td>
                        
                        <td>
                            <a href="<?= base_url('datos_ventas/'.$venta['idventas'])?>">
                            <i class="fa-solid fa-pencil"></i></a>  
                            <a href="<?= base_url('eliminar_ventas/'.$venta['idventas'])?>">
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
                        <h5 class="modal-title" id="exampleModalLabel">Ingreso de Compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_ventas') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idventas" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idventas" placeholder="Ingrese código" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_fecha_venta" class="form-label">Fecha de Venta</label>
                                <input type="date" class="form-control" name="txt_fecha_venta" placeholder="yyyy/mm/dd" require>
                            </div>
                            <div class="mb-3">
                                <label for="idproducto" class="form-label">Seleccione el Producto </label>
                                <select name="txt_idproducto" class="form-control" id="txt_idproducto">
                                <?php 
                                    foreach ($inventarioDb as $inventario): ?>
                                        <option value="<?=$inventario['idproducto'];?>"><?=$inventario['descripcion'];?></option>
                                    <?php endforeach;    ?>
                                </select>                
                            </div>
                            <div class="mb-3">
                                <label for="txt_venta" class="form-label">Precio de Venta</label>
                                <input type="text" class="form-control" name="txt_venta" placeholder="Ingrese el precio de Venta" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_cantidad" class="form-label">Cantidad a vender</label>
                                <input type="text" class="form-control" name="txt_cantidad" placeholder="Cantidad vendida" require>
                            </div>
                            <div class="mb-3">
                                  <label for="txt_cantidad" class="form-label">Seleccione Tipo de Pago</label>
                                  <select name="txt_tipo_pago" class="form-control" id="txt_tipo_pago">
                                    <option>Efectivo</option>
                                    <option>Cheque</option>
                                    <option>Tarjeta de credito</option>
                                    <option>Credito</option>
                                 </select>
                            </div>
                            <div class="mb-3">
                                <label for="txt_documento" class="form-label">Ingrese los datos del Documento</label>
                                <input type="text" class="form-control" name="txt_documento" placeholder="Numero Documento - Banco" require>
                            </div>
                            <div class="mb-3">
                                <label for="txt_idcliente" class="form-label">Seleccione el Cliente</label>
                                <select name="txt_idcliente" class="form-control" id="txt_idcliente">
                                    
                                <?php 
                                    foreach ($clientesDb as $cliente): ?>
                                        <option value="<?=$cliente['idcliente'];?>"><?=$cliente['nombre_cliente'];?></option>
                                    <?php endforeach;    ?>
                                </select>                
                            </div>
                            <div class="mb-3">
                                <label for="txt_idempleado" class="form-label">Seleccione Empleado para la comision </label>
                                <select name="txt_idempleado" class="form-control" id="txt_idempleado">
                                <?php 
                                    foreach ($empleadoDb as $empleado): ?>
                                        <option value="<?=$empleado['idempleado'];?>"><?=$empleado['nombre_empleado'];?></option>
                                    <?php endforeach;    ?>
                                </select>                
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary form-control" name="btn_guardar" value="Guardar Venta">
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