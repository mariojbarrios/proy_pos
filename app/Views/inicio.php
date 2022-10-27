<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenidos al Sistema POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.png">
  </head>
  <body background="img/fondo.jpg">

  <!-- Titulo Principal -->
  <h2 class= "text-center" style="color:White;">Bienvenidos al Sistema POS</h2>
    <h4 class = "text-center" style="color:White;">Control de Acceso</h4>
  <br/>
  <table align ="center"><tr><td>
  <div class="card text-bg-dark mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/control.png" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <form action="<?=base_url('inicio_sesion')?>"  method="post" autocomplete="off"> 
          <div class="mb-3">
            <label for="txt_usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name = "txt_usuario" required>
          <div class="form-text">Nombre de usuario.</div>
        </div>
        <div class="mb-3">
            <label for="txt_clave" class="form-label">Contraseña</label>
            <input type="password"  class="form-control" id="clave" name = "txt_clave" required>
            <div class="form-text">Escriba la clave de acceso.</div>
        </div>
        <button type="submit" class="btn btn-primary">Acceder</button>
      </form>
      </div>
      </div>
      </div>
  </div>
</td></tr> </table>


   



  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>