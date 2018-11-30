<?php
    class EmpresaProveedora{
        public $RNE;
        public $CUIT;
        public $Nombre;
        public $Direccion;
        public $Telefono;
        public $Email;

        function __construct() {}

        function Consultar($RNE){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM empresa_proveedora WHERE RNE = $RNE");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->RNE = $Item["RNE"];
                $this->CUIT = $Item["CUIT"];
                $this->Nombre = $Item["Nombre"];
                $this->Direccion = $Item["Direccion"];
                $this->Telefono = $Item["Telefono"];
                $this->Email = $Item["Email"];
            }

            return $this;
        } 

        function Crear($RNE, $CUIT, $Nombre, $Direccion, $Telefono, $Email){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" INSERT INTO empresa_proveedora
                            (`RNE`,
                            `CUIT`,
                            `Nombre`,
                            `Direccion`,
                            `Telefono`,
                            `Email`)
                            VALUES
                            ($RNE,
                            $CUIT,
                            '$Nombre',
                            '$Direccion',
                            $Telefono,
                            '$Email');");

            if($Conexion->query($Operacion)){
                $this->RNE = $RNE;
                $this->CUIT = $CUIT;
                $this->Nombre = $Nombre;
                $this->Direccion = $Direccion;
                $this->Telefono = $Telefono;
                $this->Email = $Email;

                return $this;
            }
            else{
                return null;
            }
        }

        function Modificar($RNE, $NuevoRNE, $CUIT, $Nombre, $Direccion, $Telefono, $Email){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE empresa_proveedora
                            SET
                            `RNE` = $NuevoRNE,
                            `CUIT` = $CUIT,
                            `Nombre` = '$Nombre',
                            `Direccion` = '$Direccion',
                            `Telefono` = $Telefono,
                            `Email` = '$Email'
                            WHERE 
                            `RNE` = $RNE;");

            $Conexion->query($Operacion);

            $this->RNE = $NuevoRNE;
            $this->CUIT = $CUIT;
            $this->Nombre = $Nombre;
            $this->Direccion = $Direccion;
            $this->Telefono = $Telefono;
            $this->Email = $Email;

            return $this;
        }

        function Borrar($RNE){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM empresa_proveedora WHERE RNE = $RNE");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }

    }
?>