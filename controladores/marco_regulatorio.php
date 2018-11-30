<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
  if (isset($_REQUEST["agregar"])) {
    $data = [
      ":Numero" => $_REQUEST["numero"],
      ":Duracion_Dias" => $_REQUEST["duracion"],
      ":Temperatura_Minima" => $_REQUEST["minima"],
      ":Temperatura_Maxima" => $_REQUEST["maxima"]
    ];
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/MarcoRegulatorio.php');
    MarcoRegulatorio::crear($data);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Marco Regulatorio exitosamente!");
  } else {
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/marco_regulatorio.php');
  }
?>