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
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/FichaControl.php');
    /*
    $data = [
      ":Numero" => $_REQUEST["Numero"],
      ":Tecnico_Dni_FK" => $_SESSION["tecnico"]["dni"],
      ":Lote_Numero_FK" => $_REQUEST["Lote_Numero_FK"],
      ":Semana" => $_REQUEST["Semana"],
      ":Año" => $_REQUEST["Año"],
      ":Estado_Lote" => $_REQUEST["Estado_Lote"],
      ":Observaciones_Generales" => $_REQUEST["Observaciones_Generales"]
    ];
    FichaControl::crear($data);
    */
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Verificacion.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones.php');
  } else if (isset($_REQUEST["verif"])) {
    
  } else {
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones_opciones.php');
  }
?>