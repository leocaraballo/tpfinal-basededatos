<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/Modelos/Conexion.inc.php');
    Conexion::openConnection();

    $Conexion = Conexion::getConnection();

    $Unidad = $_REQUEST["Unidad"];
    $Producto = $_REQUEST["Producto"];  
    $Lote = $_REQUEST["Lote"];
    $Tipo = $_REQUEST["Tipo"];
    $Material = $_REQUEST["Material"];
    $Peso = $_REQUEST["Peso"];
    $Volumen = $_REQUEST["Volumen"];
    $Fecha = $_REQUEST["Fecha"];
    $Descripcion = $_REQUEST["Descripcion"];

    $Operacion = (" UPDATE `supercaro`.`unidad_venta`
                    SET
                    `Lote_Numero_FK` = $Lote,
                    `Envase_Paquete` = '$Tipo',
                    `Envase_Material` = '$Material',
                    `Peso` = $Peso,
                    `Volumen` = $Volumen,
                    `Fecha_Retiro` = '$Fecha',
                    `Descripcion_Extra` = '$Descripcion'
                    WHERE `Codigo` = $Unidad;");
        
    $Resultados = $Conexion->query($Operacion);

    header("location:UnidadVenta.php?Producto=$Producto");
?>