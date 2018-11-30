<?php
  class Lote {
    public static function crear($data) {
      $sql = "INSERT INTO Lote(Producto_Codigo_FK, Fecha_Emision, Fecha_Entrada, Fecha_Vcto, Cantidad)
              VALUES (:Producto_Codigo_FK, :Fecha_Emision, :Fecha_Entrada, :Fecha_Vcto, :Cantidad)";

      require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      if ($db != null) {
        $db->prepare($sql);
        $db->execute($data);
        Conexion::closeConnection();
      }
    }
  }
?>