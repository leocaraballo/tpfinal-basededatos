<?php
  function mostrar($ruta) {
    require('vistas/templates/header.php');
    require($ruta);
    require('vistas/templates/footer.php');
  }
?>