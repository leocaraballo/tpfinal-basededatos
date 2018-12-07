<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
  if (isset($_REQUEST["agregar"])) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/TipoVerificacion.php');
    TipoVerificacion::crear();
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Tipo de Verificación exitosamente!");
  } else {
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/tipo_verificaciones.php');
  }
?>