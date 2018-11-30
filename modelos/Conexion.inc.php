<?php 

/**
 * 
 */

/**
 * 
 */
class Conexion{
	
	private static $con=null;

	public static function openConnection()
	{
		# code...
		if (self::$con == null) {
			# code...
			require_once('config.inc.php');
			try{
				$dsn = 'mysql:host=' . HOST . ';dbname=' . DBNAME;
				self::$con = new PDO($dsn,USER,PASSWORD);
        self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
				self::$con->exec('set charset utf8');
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}

	public static function getConnection(){
		if (self::$con != null) {
			# code...
			return self::$con;
		}
	}

	public static function closeConnection(){
		if (self::$con != null) {
			# code...
			self::$con = null;
		}
	}
}