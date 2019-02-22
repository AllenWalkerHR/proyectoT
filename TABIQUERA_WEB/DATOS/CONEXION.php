<<?php 
	/**
	 * 
	 */
	class Conexion
	{
		private static $db = 'TABIQUERA' ;
    	private static $servidor = 'localhost:3306' ;
    	private static $usuario = 'root';
    	private static $password = 'root';
    	private static $conexion  = null;
		
		function __construct(argument)
		{
		}

		public static function Open(){
			if(self::$conexion == null){
				 try{
                		self::$conexion =  new PDO( 
                			"mysql:host=".self::$servidor.";"."dbname=".self::$db, self::$usuario, self::$password); 
                		self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            		}catch(PDOException $e){
                		exit($e->getMessage()); 
                	}
			}
				return self::$conexion;
		}

		public static function Close(){
        	self::$conexion = null;
        }

	}

 ?>