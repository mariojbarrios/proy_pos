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
                        <h5 class="card-title">Actualizar Registro de Empleados</h5>
                        <form action="<?= base_url('actualizar_empleados') ?>" method="post" autocomplete="off">
                             <div class="mb-3">
                                <label for="txt_idempleado" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_idempleado" value="<?=$empleadosDb['idempleado'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre_empleado" class="form-label">Nombre Completo del Empleado</label>
                                <input type="text" class="form-control" name="txt_nombre_empleado" value="<?=$empleadosDb['nombre_empleado'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_puesto" class="form-label">Puesto</label>
                                <input type="text" class="form-control" name="txt_puesto" value="<?=$empleadosDb['puesto'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">Seleccione el Permiso al Sistema </label>
                                <select name="txt_idusuario" class="form-control" id="txt_idusuario">
                                <?php 
                                    foreach ($usuariosDb as $usuario): 
                                         if ($usuario['idusuario']==$empleadosDb['idusuario']){ ?>
                                        <option value="<?=$usuario['idusuario'];?>" selected><?=$usuario['permisos'];?></option>
                                    <?php }else{ ?>
                                        <option value="<?=$usuario['idusuario'];?>"><?=$usuario['permisos'];?></option>
                                    <?php } endforeach;?>
                                     
                                </select>                
                            </div>
                           <div class="mb-3">
                                <label for="txt_usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="txt_usuario" value="<?=$empleadosDb['usuario'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_clave" class="form-label">Clave</label>
                                <input type="text" class="form-control" name="txt_clave" value="<?=$empleadosDb['clave'];?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary form-control"><i class="fa fa-retweet"></i> Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                 <div class="card-footer">
                 <a href="<?= base_url('listar_empleados') ?>" class="btn btn-primary"><i class="fa fa-fast-backward"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>