<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
  if (isset($_REQUEST["ver"])) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/EmpresaProveedora.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Verificacion.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones_listado.php');
  } else if (isset($_REQUEST["agregar"])) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Lote.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones_agregar.php');
  } else if (isset($_REQUEST["completo"])) {

  } else {
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones_opciones.php');
  }
?>