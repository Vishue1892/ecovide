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
  <div id='calendar'></div> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/main.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/moment.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/app.js"></script>


  </body>
</html>