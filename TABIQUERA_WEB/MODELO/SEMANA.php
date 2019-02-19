<?php 
	/**
	 * 
	 */
	class Semana
	{
		private $id;
		private $no_bultos;
		private $no_tablas;
		private $id_usuariot;
		function __construct($id,$no_bultos,$no_tablas,$id_usuariot)
		{
			$this->id=$id;
			$this->no_bultos=$no_bultos;
			$this->no_tablas=$no_tablas;
			$this->id_usuariot=$id_usuariot;
		}

		function get_id(){
			return $this->id;
		}
		function get_no_bultos(){
			return $this->no_bultos;
		}
		function get_no_tablas(){
			return $this->no_tablas;
		}
		function get_id_usuariot(){
			return $this->id_usuariot;
		}
		function set_id($id){
			$this->id=$id;
		}
		function set_no_bultos($no_bultos){
			$this->no_bultos=$no_bultos;
		}
		function set_no_tablas($no_tablas){
			$this->no_tablas=$no_tablas;
		}
		function set_id_usuariot($id_usuariot){
			$this->id_usuariot=$id_usuariot;
		}
	}
 ?>