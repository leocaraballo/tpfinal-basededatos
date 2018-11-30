<?php
  /*
  // CODIGO PARA RESETEAR LA BASE DE DATOS
  // Pasa el archivo sql a string
  $sql = file_get_contents("database_SuperCaro.sql");
  
  require('modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();

  if ($db != null) {
    try {
      $db->exec($sql);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  */
  require_once('modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();

  if ($db != null) {
    $sql = "SELECT L.Numero as Lote_Numero, P.Nombre as Producto_Nombre, P.Marca as Producto_Marca, 
                       P.Empresa_Proveedora_RNE_FK as RNE, P.RNPA as Producto_RNPA, EM.Nombre as Proveedor_Nombre
                FROM Lote L JOIN Producto P ON L.Producto_Codigo_FK = P.Codigo
                            JOIN Empresa_Proveedora EM ON EM.RNE = P.Empresa_Proveedora_RNE_FK";
    try {
      foreach ($db->query($sql) as $row) {
        echo $row["Lote_Numero"]." ".$row["Producto_Nombre"]."<br>";
      }
      echo "Todo OK";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  /*
  $sql = "INSERT INTO Tipo_Verificacion(Nombre, Tipo)
          VALUES ('Trazabilidad', 'Cumplimiento'), ('Presencia Gluten', 'Cumplimiento'), 
                 ('Contenido Alcohólico', 'Medida'), ('Contenido de Sodio', 'Medida');";
  
  require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();
  if ($db != null) {
    try {
      $db->exec($sql);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  */
?>