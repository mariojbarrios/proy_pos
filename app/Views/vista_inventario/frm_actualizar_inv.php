<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/icono.png">
    <title>Actualizar Usuario</title>
</head>

<body>
<div class="container">
        <br><br>
        <div class="row row-cols-1 row-cols-md-2 g-3" >
             <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar Productos</h5>
                        <form action="<?= base_url('actualizar_inventarios') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                 <label for="txt_idproducto" class="form-label">Código</label>
                                 <input type="text" class="form-control" name="txt_idproducto" value="<?=$inventariosDb['idproducto'];?>">
                             </div>
                          <div class="mb-3">
                              <label for="txt_descripcion" class="form-label">Descripcion del Producto</label>
                              <input type="text" class="form-control" name="txt_descripcion" value="<?=$inventariosDb['descripcion'];?>">
                          </div>
                         <div class="mb-3">
                              <label for="txt_costo" class="form-label">Precio Costo</label>
                             <input type="text" class="form-control" name="txt_costo" value="<?=$inventariosDb['costo'];?>">
                         </div>
                         <div class="mb-3">
                            <label for="txt_venta" class="form-label">Precio de Venta</label>
                            <input type="text" class="form-control" name="txt_venta" value="<?=$inventariosDb['venta'];?>">
                         </div>
                        <div class="mb-3">
                             <label for="txt_cantidad" class="form-label">Existencia</label>
                             <input type="text" class="form-control" name="txt_cantidad" value="<?=$inventariosDb['cantidad'];?>">
                         </div>
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary form-control"><i class="fa fa-retweet"></i> Guardar</button>
                        </div>
                      </form>
                    </div>
                 <div class="card-footer">
                 <a href="<?= base_url('lista_inventarios') ?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>