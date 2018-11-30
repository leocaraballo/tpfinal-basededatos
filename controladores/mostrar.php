<?php
  function mostrar($ruta) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/templates/header.php');
    require_once($ruta);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/templates/footer.php');
  }
?>