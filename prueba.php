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
  /*
  require('modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();

  if ($db != null) {
    $sql = "SELECT nombre
            FROM categoria";
    try {
      foreach ($db->query($sql) as $row) {
        echo $row["nombre"]."<br>";
      }
      echo "Todo OK";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  */
  // CODIGO PARA RESETEAR LA BASE DE DATOS
  // Pasa el archivo sql a string
  $sql = "INSERT INTO Marco_Regulatorio(Numero, Duracion_Dias, Temperatura_Minima, Temperatura_Maxima)
          VALUES (401, 15, 5, 27), (205, 24, -10, 20), (66, 10, 10, 20)";
  
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
?>