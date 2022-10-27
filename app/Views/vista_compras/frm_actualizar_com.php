<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Actualizar Compras</title>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row row-cols-1 row-cols-md-2 g-3" >
             <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar Registro de Compras</h5>
                           <form action="<?= base_url('actualizar_compras') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idcompras" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idcompras" value="<?=$comprasDb['idcompras'];?>">
                            </div>
                                <div class="mb-3">
                                    <label for="txt_fecha_compra" class="form-label">Fecha de Compra</label>
                                    <input type="date" class="form-control" name="txt_fecha_compra" value="<?=$comprasDb['fecha_compra'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="idproducto" class="form-label">Seleccione el Producto </label>
                                     <select name="txt_idproducto" class="form-control" id="txt_idproducto">
                                         <?php foreach ($inventarioDb as $inventario): 
                                             if ($inventario['idproducto']==$comprasDb['idproducto']){?>
                                                <option selected><?=$inventario['descripcion'];?></option>
                                           <?php } else{ ?>     
                                                <option value="<?=$inventario['idproducto'];?>"><?=$inventario['descripcion'];?></option>
                                        <?php }endforeach;    ?>
                                    </select>                
                                </div>
                                    <label for="txt_costo" class="form-label">Precio de Compra</label>
                                    <input type="text" class="form-control" name="txt_costo" value="<?=$comprasDb['costo'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_cantidad" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" name="txt_cantidad" value="<?=$comprasDb['cantidad'];?>">
                                </div>
                                <div class="mb-3">
                                <label for="txt_tipo_pago" class="form-label">Seleccione la forma de Pago</label>
                                <select name="txt_tipo_pago" class="form-control" id="txt_tipo_pago">
                                <?php  
                                   echo "<option selected>".$comprasDb['tipo_pago']."</option>"; 
                                   ?>   <option>Efectivo</option>
                                        <option>Cheque</option>
                                        <option>Tarjeta de credito</option>
                                        <option>Credito</option>
                                     </select>
                                </div>
                                <div class="mb-3">
                                    <label for="txt_documento" class="form-label">Documento</label>
                                    <input type="text" class="form-control" name="txt_documento" value="<?=$comprasDb['documento'];?>">
                                </div>
                                <div class="mb-3">
                                <label for="txt_idproveedor" class="form-label">Seleccione el Proveedor </label>
                                <select name="txt_idproveedor" class="form-control" id="txt_idproveedor">
                                <?php 
                                    foreach ($proveedorDb as $proveedor): 
                                       if($proveedor['idproveedor']==$comprasDb['idproveedor']){?>
                                        <option selected><?=$proveedor['nombre_proveedor'];?></option>
                                    <?php }else{ ?>    
                                        <option value="<?=$proveedor['idproveedor'];?>"><?=$proveedor['nombre_proveedor'];?></option>
                                    <?php }endforeach; ?>
                                </select>                
                            </div>
                                <div class="mb-3">
                                <label for="txt_idempleado" class="form-label">Seleccione Empleado para la comision </label>
                                <select name="txt_idempleado" class="form-control" id="txt_idempleado">
                                <?php 
                                    foreach ($empleadoDb as $empleado):
                                        if($empleado['idempleado']==$comprasDb['idempleado']){?>
                                            <option selected><?=$empleado['nombre_empleado'];?></option>
                                        <?php }else{ ?>    
                                            <option value="<?=$empleado['idempleado'];?>"><?=$empleado['nombre_empleado'];?></option>
                                    <?php } endforeach;  ?>
                                </select>                
                            </div>


                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary form-control"><i class="fa fa-retweet"></i>  Guardar Cambios</button>
                            </div>
                        </form>

                    </div>
                 <div class="card-footer">
                 <a href="<?= base_url('listar_compras') ?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>