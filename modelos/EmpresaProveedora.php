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

        public static function retornarTodasEmpresa_Proveedora($con) {
        if (isset($con)) {
            $qry = 'SELECT RNE ,CUIT, Nombre, Direccion, Telefono, Email FROM empresa_proveedora';
            $statement = $con->prepare($qry);
            $statement->execute();
            
            $resultset = $statement->fetchAll();
            if ($resultset) {
                $retorno;
                foreach ($resultset as $value) {
                  $retorno[] = new EmpresaProveedora($value['RNE'],$value['CUIT'], $value['Nombre'], $value['Direccion'], 
                        $value['Telefono'], $value['Email']);  
                }
                return $retorno;
            }else{
                return null;
            }
        }
    }
    
    public static function retornarEmpresa_Proveedora($con, $rne) {
        if (isset($con)) {
            $qry = 'SELECT CUIT, Nombre, Direccion, Telefono, Email FROM empresa_proveedora WHERE RNE = :rne';
            $statement = $con->prepare($qry);
            $statement->bindParam(':rne',$rne, PDO::PARAM_INT);
            $statement->execute();
            
            $resultset = $statement->fetch();
            if ($resultset) {
                return new EmpresaProveedora($rne,$resultset['CUIT'], $resultset['Nombre'], $resultset['Direccion'], 
                        $resultset['Telefono'], $resultset['Email']);
            }else{
                return null;
            }
        }
    }

        public static function insertarEmpresa_Proveedora($con, $rne, $cuit, $nombre, $direccion, $telefono, $email) {
        if (EmpresaProveedora::retornarEmpresa_Proveedora($con, $rne) == null) {
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

        /*public static function insertarEmpresa_Proveedora($con, $rne, $cuit, $nombre, $direccion, $telefono, $email) {
        if (EmpresaProveedora::retornarEmpresa_Proveedora($con, $rne) == null) {
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
    }*/
    
    public static function modificarEmpresa_Proveedora($con, $rne, $cuit, $nombre, $direccion, $telefono, $email) {
        if (isset($con)) {
            $qry = 'UPDATE empresa_proveedora SET Cuit = :cuit, Nombre = :nombre, Direccion = :direccion, Telefono = :telefono, Email = :email WHERE RNE = :rne';
            $statement = $con->prepare($qry);
            $statement->bindParam(':rne',$rne, PDO::PARAM_INT);
            $statement->bindParam(':cuit',$cuit, PDO::PARAM_INT);
            $statement->bindParam(':nombre',$nombre, PDO::PARAM_STR);
            $statement->bindParam(':direccion',$direccion, PDO::PARAM_STR);
            $statement->bindParam(':telefono',$telefono, PDO::PARAM_LOB);
            $statement->bindParam(':email',$email, PDO::PARAM_STR);
            return $statement->execute();
        }
    }

        function Borrar($RNE){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
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
        
        public static function getEmpresasProveedoras() {
          require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
          Conexion::openConnection();
          $db = Conexion::getConnection();
          $sql = "SELECT RNE, Nombre
                  FROM Empresa_Proveedora";
          $ret = null;
          if ($db != null) {
            $ret = $db->query($sql);
          }
          Conexion::closeConnection();
          return $ret;
        }
    }
?>
