<?php
    class EmpresaProveedora{
        public $rne;
        public $cuit;
        public $nombre;
        public $direccion;
        public $telefono;
        public $email;

        function __construct($rne, $cuit, $nombre, $direccion, $telefono, $email) {
        $this->rne = $rne;
        $this->cuit = $cuit;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
        }

        public static function retornarEmpresa_Proveedora($con, $rne) {
            if (isset($con)) {
                $qry = 'SELECT CUIT, Nombre, Direccion, Telefono, Email FROM empresa_proveedora WHERE RNE = :rne';
                $statement = $con->prepare($qry);
                $statement->bindParam(':rne',$rne, PDO::PARAM_INT);
                $statement->execute();

                $resultset = $statement->fetch();
                if ($resultset) {
                    return new Empresa_Proveedora($rne,$resultset['CUIT'], $resultset['Nombre'], $resultset['Direccion'], 
                            $resultset['Telefono'], $resultset['Email']);
                }else{
                    return null;
                }
            }
        }

        public static function insertarEmpresa_Proveedora($con, $rne, $cuit, $nombre, $direccion, $telefono, $email) {
        if (Empresa_Proveedora::retornarEmpresa_Proveedora($con, $rne) == null) {
           if (isset($con)) {
                $qry = 'INSERT INTO empresa_proveedora(`RNE`, `CUIT`, `Nombre`, `Direccion`, `Telefono`, `Email`) '
                        . 'VALUES (:rne, :cuit, :nombre, :direccion, :telefono, :email)';
                $statement = $con->prepare($qry);
                $statement->bindParam(':rne',$rne, PDO::PARAM_INT);
                $statement->bindParam(':cuit',$cuit, PDO::PARAM_INT);
                $statement->bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $statement->bindParam(':direccion',$direccion, PDO::PARAM_STR);
                $statement->bindParam(':telefono',$telefono, PDO::PARAM_LOB);
                $statement->bindParam(':email',$email, PDO::PARAM_STR);
                $statement->execute();
            } 
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
