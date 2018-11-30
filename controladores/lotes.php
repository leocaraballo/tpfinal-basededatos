<?php
  require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
  if (isset($_REQUEST["agregar"])) {
    $data = [
      ":Producto_Codigo_FK" => $_REQUEST["producto"],
      ":Fecha_Emision" => $_REQUEST["fecha_emision"],
      ":Fecha_Entrada" => $_REQUEST["fecha_entrada"],
      ":Fecha_Vcto" => $_REQUEST["fecha_vcto"],
      ":Cantidad" => $_REQUEST["cantidad"],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Lote.php');
    Lote::crear($data);
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/lotes_exito.php');
  } else {
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Producto.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/lotes.php');
  }
?>