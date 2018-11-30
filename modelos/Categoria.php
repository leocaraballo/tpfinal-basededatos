<?php
    class Categoria{
        public $Nombre;

        function __construct() {}

        public static function RetornarTodas(){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM categoria");

            $Resultados = $Conexion->query($Operacion);
            $retorno;
            foreach($Resultados as $Item){
                $retorno[] = $Item["Nombre"];
            }

            return $retorno;
        }

        function Consultar($Nombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM categoria WHERE Nombre = '$Nombre'");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Nombre = $Item["Nombre"];
            }

            return $this;
        } 

         public static function Crear($Nombre){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion =    ("INSERT INTO categoria
                            (`Nombre`)
                            VALUES
                            ('$Nombre');");

            if($Conexion->query($Operacion)){
               

                return true;
            }
            else{
                return null;
            }
        }

        function Modificar($Nombre, $NuevoNombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE categoria
                            SET
                            `Nombre` = '$NuevoNombre'
                            WHERE 
                            `Nombre` = '$Nombre';");

            $Conexion->query($Operacion);

            $this->Nombre = $NuevoNombre;
            return $this;
        }

        function Borrar($Nombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM categoria WHERE Nombre = '$Nombre'");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>