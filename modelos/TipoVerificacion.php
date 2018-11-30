<?php
    class TipoVerificacion{
        public $Nombre;
        public $Tipo;

        function __construct() {}

        function Consultar($Nombre){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM tipo_verificacion WHERE Nombre = '$Nombre'");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Nombre = $Item["Nombre"];
                $this->Tipo = $Item["Tipo"];
            }

            return $this;
        } 

        function Crear($Nombre, $Tipo){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" INSERT INTO tipo_verificacion
                            (`Nombre`,
                            `Tipo`)
                            VALUES
                            ('$Nombre',
                            '$Tipo');");

            if($Conexion->query($Operacion)){
                $this->Nombre = $Nombre;
                $this->Tipo = $Tipo;

                return $this;
            }
            else{
                return null;
            }
        }

        function Modificar($Nombre, $NuevoNombre, $Tipo){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE tipo_verificacion
                            SET
                            `Nombre` = '$NuevoNombre',
                            `Tipo` = '$Tipo'
                            WHERE 
                            `Nombre` = '$Nombre';");

            $Conexion->query($Operacion);

            $this->Nombre = $NuevoNombre;
            $this->Tipo = $Tipo;

            return $this;
        }

        function Borrar($Nombre){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM tipo_verificacion WHERE Nombre = '$Nombre'");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }

        public static function getTipoVerificaciones() {
          require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
          Conexion::openConnection();
          $db = Conexion::getConnection();
          $ret = null;
          if ($db != null) {
            $sql = "SELECT Nombre, Tipo
                    FROM Tipo_Verificacion";
            $ret = $db->query($sql);
          }
          Conexion::closeConnection();
          return $ret;
        }
    }
?>