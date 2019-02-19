<?php  
	/**
	 * 
	 */
	class UsuarioT
	{
		private $nombre;
		private $apellidos;
		private $usuario;
		function __construct($nombre,$apellidos,$usuario)
		{
			$this->nombre=$nombre;
			$this->apellidos=$apellidos;
			$this->usuario=$usuario;
		}
		function get_nombre(){
			return $this->nombre;
		}
		function get_apellidos(){
			return $this->apellidos;
		}
		function get_usuario(){
			return $this->usuario;
		}
		function set_nombre($nombre){
			$this->nombre=$nombre;
		}
		function set_apellidos($apellidos){
			$this->apellidos=$apellidos;
		}
		function set_usuario($usuario){
			$this->usuario=$usuario;
		}
	}
	
?>