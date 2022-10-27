<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Actualizar Usuario</title>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row row-cols-1 row-cols-md-2 g-3" >
             <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar Registro de Usuario</h5>
                           <form action="<?= base_url('actualizar_usuarios') ?>" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idusuario" value="<?=$usuariosDb['idusuario'];?>">
                            </div>
                                <div class="mb-3">
                                    <label for="txt_permisos" class="form-label">Permisos</label>
                                    <input type="text" class="form-control" name="txt_permisos" value="<?=$usuariosDb['permisos'];?>">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary form-control"><i class="fa fa-retweet"></i> Guardar Cambios</button>
                            </div>
                        </form>

                    </div>
                 <div class="card-footer">
                 <a href="<?= base_url('lista_usuarios') ?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>