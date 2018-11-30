<?php
    class Categoria{
        public $Nombre;

        function __construct() {}

        function Consultar($Nombre){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM categoria WHERE Nombre = '$Nombre'");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Nombre = $Item["Nombre"];
            }

            return $this;
        } 

        function Crear($Nombre){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion =    ("INSERT INTO categoria
                            (`Nombre`)
                            VALUES
                            ('$Nombre');");

            if($Conexion->query($Operacion)){
                $this->Nombre = $Nombre;

                return $this;
            }
            else{
                return null;
            }
        }

        function Modificar($Nombre, $NuevoNombre){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
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
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
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