<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/Modelos/Conexion.inc.php');
Conexion::openConnection();

$Conexion = Conexion::getConnection();

$ID = $_REQUEST["ID"];

$Operacion = (" DELETE FROM `supercaro`.`unidad_venta`
                WHERE Codigo = $ID");
    
$Resultados = $Conexion->query($Operacion);

header("location:UnidadVenta.php");




?>