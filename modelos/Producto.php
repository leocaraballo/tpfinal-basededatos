<?php 
 class Producto{
        public $Codigo;
        public $Empresa_Proveedora_RNE_FK;
        public $Marco_Regulatorio_Numero_FK;
        public $RNPA;
        public $Nombre;
        public $Marca;
        public $Descripcion;

        function __construct() {}

      

        public static function insertarProducto($Codigo, $Empresa_Proveedora_RNE_FK, $Marco_Regulatorio_Numero_FK, $RNPA, $Nombre, $Marca,$Descripcion){
          require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
          Conexion::openConnection();
          $Conexion = Conexion::getConnection();


          $query = ("INSERT INTO producto
                                  (`Codigo`,
                                  `Empresa_Proveedora_RNE_FK`,
                                  `Marco_Regulatorio_Numero_FK`,
                                  `RNPA`,
                                  `Nombre`,
                                  `Marca`,
                                  `Descripcion`)
                    VALUES
                          (:Codigo, :Empresa_Proveedora_RNE_FK, :Marco_Regulatorio_Numero_FK, :RNPA, :Nombre, :Marca, :Descripcion)");

          $data = [
            ":Codigo" => $Codigo,
            ":Empresa_Proveedora_RNE_FK" => $Empresa_Proveedora_RNE_FK,
            ":Marco_Regulatorio_Numero_FK" => $Marco_Regulatorio_Numero_FK,
            ":RNPA" => $RNPA,
            ":Nombre" => $Nombre,
            ":Marca" => $Marca,
            ":Descripcion" => $Descripcion
          ];

          $statement = $Conexion->prepare($query);
          $statement->execute($data);
          Conexion::closeConnection();
        }

        function Modificar($Codigo, $Empresa_Proveedora_RNE_FK, $Marco_Regulatorio_Numero_FK, $RNPA, $Nombre, $Marca,$Descripcion){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinaltpfinal-basededatos/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $query = (" UPDATE Producto
                            SET
                            `Empresa_Proveedora_RNE_FK` = $Empresa_Proveedora_RNE_FK,
                            `Marco_Regulatorio_Numero_FK` = $Marco_Regulatorio_Numero_FK,
                            `Nombre` = $Nombre,
                            `Marca` = $Marca,
                             `Descripcion` = $Descripcion

                            WHERE 
                            `Codigo` = $Codigo;");

         

         

          if ($Conexion->query($query) === TRUE) {
        return "exito";
    } else {
        return "error" ;
    }

    
        }

     public static function getProductos() {
      require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      $ret = null;
      if ($db != null) {
        $sql = "SELECT Codigo, Nombre
                FROM Producto";
        $ret = $db->query($sql);
      }
      Conexion::closeConnection();
      return $ret;
    }

    }
?>