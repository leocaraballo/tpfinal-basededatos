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
    if (!isset($_SESSION)) {
      session_start();
    }

    $data = [
      ":Numero" => $_REQUEST["Numero"],
      ":Tecnico_Dni_FK" => $_SESSION["user"]["Dni"],
      ":Lote_Numero_FK" => $_REQUEST["Lote_Numero_FK"],
      ":Semana" => $_REQUEST["Semana"],
      ":Ano" => $_REQUEST["Año"],
      ":Estado_Lote" => $_REQUEST["Estado_Lote"],
      ":Observaciones_Generales" => $_REQUEST["Observaciones_Generales"]
    ];
    FichaControl::crear($data);

    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Lote.php');
    $_SESSION["lote_producto"] = Lote::getLoteProducto($_REQUEST["Lote_Numero_FK"]);
    $_SESSION["ficha_control"] = $_REQUEST["Numero"];

    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Verificacion.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones.php');
  } else if (isset($_REQUEST["verif"])) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    $query = "";
    for ($i = 0; $i < count($_REQUEST["Ficha_control_Numero_FK"]); $i++) {
      $query = $query."(".$_REQUEST["Ficha_control_Numero_FK"][$i].",'".$_REQUEST["Tipo_Verificacion_Nombre_FK"][$i]."', '".
                        $_REQUEST["Fecha"][$i]."', '".$_REQUEST["Hora"][$i]."', '".$_REQUEST["Resultado"][$i]."', ".
                        $_REQUEST["Cumple"][$i]."),";
    }
    $query = substr($query, 0, -1);

    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Verificacion.php');
    if (Verificacion::crear($query) != 0) {
      mensaje("Verificaciones Correctamente añadidas.");
    }
  } else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Lote.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/verificaciones_opciones.php');
  }
?>