<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Actualizar Ventas</title>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row row-cols-1 row-cols-md-2 g-3" >
             <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar Registro de Ventas</h5>
                           <form action="<?= base_url('actualizar_ventas') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idventas" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idventas" value="<?=$ventasDb['idventas'];?>">
                            </div>
                                <div class="mb-3">
                                    <label for="txt_fecha_venta" class="form-label">Fecha de Venta</label>
                                    <input type="date" class="form-control" name="txt_fecha_venta" value="<?=$ventasDb['fecha_venta'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="idproducto" class="form-label">Seleccione el Producto </label>
                                     <select name="txt_idproducto" class="form-control" id="txt_idproducto">
                                         <?php foreach ($inventarioDb as $inventario): 
                                                if ($inventario['idproducto']==$ventasDb['idproducto']){?>
                                                <option selected><?=$inventario['descripcion'];?></option>
                                                <?php } else { ?>
                                                <option value="<?=$inventario['idproducto'];?>"><?=$inventario['descripcion'];?></option>
                                        <?php } endforeach;    ?>
                                    </select>                
                                </div>
                                <div class="mb-3">
                                    <label for="txt_venta" class="form-label">Precio de Venta</label>
                                    <input type="text" class="form-control" name="txt_venta" value="<?=$ventasDb['venta'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_cantidad" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" name="txt_cantidad" value="<?=$ventasDb['cantidad'];?>">
                                </div>
                                <div class="mb-3">
                                <label for="txt_tipo_pago" class="form-label">Seleccione la forma de Pago</label>
                                 <select name="txt_tipo_pago" class="form-control" id="txt_tipo_pago">
                                 <?php  
                                   echo "<option selected>".$ventasDb['tipo_pago']."</option>"; 
                                   ?>
                                        <option>Efectivo</option>
                                        <option>Cheque</option>
                                        <option>Tarjeta de credito</option>
                                        <option>Credito Interno</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="txt_documento" class="form-label">Documento</label>
                                    <input type="text" class="form-control" name="txt_documento" value="<?=$ventasDb['documento'];?>">
                                </div>
                                <div class="mb-3">
                                  <label for="txt_idcliente" class="form-label">Seleccione el Cliente </label>
                                <select name="txt_idcliente" class="form-control" id="txt_idcliente">
                                    
                                <?php 
                                    foreach ($clientesDb as $clientes): 
                                        if ($clientes['idcliente']==$ventasDb['idcliente']){?>
                                            <option selected><?=$clientes['nombre_cliente'];?></option>
                                        <?php }else { ?>
                                            <option value="<?=$clientes['idcliente'];?>"><?=$clientes['nombre_cliente'];?></option>
                                        <?php } endforeach;    ?>
                                    
                                </select>                
                            </div>
                                <div class="mb-3">
                                <label for="txt_idempleado" class="form-label">Seleccione Empleado para la comision </label>
                                <select name="txt_idempleado" class="form-control" id="txt_idempleado">
                                <?php 
                                    foreach ($empleadoDb as $empleado): 
                                        if($empleado['idempleado']==$ventasDb['idempleado']){ ?>
                                            <option selected><?=$empleado['nombre_empleado'];?></option>
                                        <?php }else{  ?>
                                            <option value="<?=$empleado['idempleado'];?>"><?=$empleado['nombre_empleado'];?></option>
                                        <?php } endforeach;  ?>
                                         
                                </select>                
                            </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary form-control"><i class="fa fa-retweet"></i> Guardar Cambios</button>
                            </div>
                        </form>

                    </div>
                 <div class="card-footer">
                 <a href="<?= base_url('listar_ventas') ?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>