<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Assets/css/estilosca.css">
    <link href="<?php echo base_url; ?>Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url; ?>Assets/css/main.min.css" rel="stylesheet">  
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="main">
      <div class="menu">
        <h2 id="logo">Bienvenido Usuario!!</h2>
        <a href="../index.php">Principal</a>
        <a href="#">Calendario</a>
        <a href="#">Pacientes</a>
        <a href="#">Medico</a>
        <a href="#">Nuevo Estudio</a>
        <a href="#">Resultados</a>
        <a href="#">Examenes</a>
        <a href="#">Usuarios</a>
        <a href="#">Historial</a>
      </div>
      <div class="container">
        <div id='calendar'></div> 
      </div> 

      <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title" id="titulo">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formulario">
              <div class="modal-body">
                <div class="form-floating mb-3">
                  <input type="hidden" id="id" name="id">
                  <input type="text" class="form-control" id="title" name="title">
                  <label for="title" class="form-label">Estudios</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" id="name" class="form-control" name="name">
                  <label for="name" class="form-label">Nombre del Paciente</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="start" name="start">
                  <label for="start" class="form-label">Fecha</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="time" id="time" class="form-control" name="time">
                  <label for="time" class="form-label">Hora </label>
                </div>
                <div class="form-floating mb-3">
                  <input type="color" class="form-control" id="color" name="color">
                  <label for="color" class="form-label">Color</label>
                </div>   
              </div>
              <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" type="button" id="btnEliminar">Eliminar</button>
                <button class="btn btn-info" id="btnAccion" type="submit">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url; ?>Assets/js/main.min.js"></script>
      <script src="<?php echo base_url; ?>Assets/js/moment.js"></script>
      <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
      <script src="<?php echo base_url; ?>Assets/js/es.js"></script>
      <script>
        const base_url = '<?php echo base_url; ?>';
      </script>
      <script src="<?php echo base_url; ?>Assets/js/app.js"></script>
    </div>
  </body>
</html>