<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
  if (isset($_REQUEST["add"])) {
    $query = "";
    foreach ($_REQUEST["Tipo_Verificacion_Nombre_FK"] as $fk) {
      $query = $query."(".$_REQUEST["Marco_Regulatorio_Numero_FK"].",'".$fk."'),";
    }
    $query = substr($query, 0, -1);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/MarcoRegulatorio.php');
    MarcoRegulatorio::addTiene($query);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Marco Regulatorio con sus correspondientes Tipos de Verificaciones!");
  } else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/TipoVerificacion.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/tiene.php');
    session_start();
    $_SESSION["marco_regulatorio_numero"] = null;
  }
?>