<?php
  function mostrar($ruta) {
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/templates/header.php');
    require($ruta);
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/templates/footer.php');
  }
?>