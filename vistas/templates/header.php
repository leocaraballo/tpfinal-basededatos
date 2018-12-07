<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<title>SuperCaro</title>
<link rel="icon" href="/tpfinal-basededatos/img/squeaky farms.png">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  #Cursiva {
    font-style: italic
  }

  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif
  }

  .w3-bar,
  h1,
  button {
    font-family: "Montserrat", sans-serif
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
  }

  main {
    background-image: url("/tpfinal-basededatos/img/almacen.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  .titulo-grande {
    color: white;
    text-shadow: 4px 4px 8px #000000;
  }

  .white-l {
    color: white;
    text-shadow: 2px 2px 4px #000000;
  }

  .bold-l {
    font-weight: 700;
  }
</style>

<body>
<?php

  if(isset($_POST['init']) || isset($_SESSION['user'])) {
    # code...
    if (isset($_POST['init'])) {
      # code...
      $tecnico = Tecnico::Consultar($_POST['dni']);
      $_SESSION["user"] = $tecnico;
    }
    
    if($_SESSION["user"] != null){
      
      ?>
      <header>
        <!-- Navbar -->
        <div class="w3-top">
          <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
              href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/tpfinal-basededatos/" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Inicio</a>
            <a href="/tpfinal-basededatos/controladores/producto.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Producto</a>
            <a href="/tpfinal-basededatos/controladores/inventario.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inventario</a>
            <a href="/tpfinal-basededatos/controladores/lotes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Lote</a>
            <a href="/tpfinal-basededatos/controladores/marco_regulatorio.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Marco Regulatorio</a>
            <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/verificaciones.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Verificaciones</a>
            <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/empresa_proveedora.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Empresas Proveedoras</a>
            <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/categoria.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Categoria</a>
            <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/tecnico.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tecnico</a>
             <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Cerrar Sesión</a>
          </div>

          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="/tpfinal-basededatos/" class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
            <a href="/tpfinal-basededatos/controladores/producto.php" class="w3-bar-item w3-button w3-padding-large">Producto</a>
            <a href="/tpfinal-basededatos/controladores/lotes.php" class="w3-bar-item w3-button w3-padding-large">Lote</a>
            <a href="/tpfinal-basededatos/controladores/marco_regulatorio.php" class="w3-bar-item w3-button w3-padding-large">Marco Regulatorio</a>
            <a onclick="document.getElementById('id02').style.display='block'" href="/tpfinal-basededatos/controladores/verificaciones.php" class="w3-bar-item w3-button w3-padding-large">Verificaciones</a>
            <a href="/tpfinal-basededatos/controladores/empresa_proveedora.php" class="w3-bar-item w3-button w3-padding-large">Empresas Proveedoras</a>
          </div>
        </div>
      </header>
      <?php
    }else{
      ?>

      <?php
    }
  }
?>
  
