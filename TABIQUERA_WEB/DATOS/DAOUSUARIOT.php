<?php 
	require_once 'CONEXION.php';
	require_once '../MODELO/USUARIOT.php';

	class DaoUsuarioT
	{
		private $conexion;

		private function conectar(){
        	try{
				$this->conexion = Conexion::Open();
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
    	}
	}

 ?>