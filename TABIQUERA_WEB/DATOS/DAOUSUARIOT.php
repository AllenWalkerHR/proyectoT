<?php 
	require_once 'CONEXION.php';
	require_once '../MODELO/USUARIOT.php';

	class DaoUsuarioT
	{
		private $conexion;

		private function conect(){
        	try{
				$this->conexion = Conexion::Open();
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
    	}

    	public function insert(UsuarioT $obj){
    		$clave=0;
			try {
            	$sql = "INSERT INTO Employees (NOMBRE,APELLIDO,NOMBRE_USUARIO,CONTRASEÑA) values(?, ?, ?, ?)";
            
            	$this->conectar();
            	$this->conexion->prepare($sql)->execute(
                	array($obj->nombre,
						$obj->apellido,
						$obj->nombre_usuario,
						$obj->contraseña));

            	$clave=$this->conexion->lastInsertId();
            	return $clave;
			} catch (Exception $e) {
				return $clave;
			}finally{
            	Conexion::cerrarConexion();
        	}
    	}

    	public function queryAll(){
    		try{
            	$this->conectar();    
				$lista = array();
				$sentenciaSQL = $this->conexion->prepare("SELECT * FROM Employees");
				$sentenciaSQL->execute();
            
				foreach($sentenciaSQL->fetchAll(PDO::FETCH_OBJ) as $fila){
					$obj = new UsuarioT();
                	$obj->id = $fila->ID;
	            	$obj->nombre = $fila->NOMBRE;
	            	$obj->apellido = $fila->APELLIDO;
	            	$obj->nombre_usuario = $fila->NOMBRE_USUARIO;
	            	$obj->pass = $fila->CONTRASEÑA;
					$lista[] = $obj;
				}
            
				return $lista;
			}catch(Exception $e){
				echo $e->getMessage();
				return null;
			}finally{
            	Conexion::cerrarConexion();
        	}
    	}
    	
    	public function query($id){
    		try{ 
            	$this->conectar();
            	$user = null;
            	$sentenciaSQL = $this->conexion->prepare("SELECT * FROM USUARIOT WHERE ID=?");
				$sentenciaSQL->execute([$id]);
				$fila=$sentenciaSQL->fetch(PDO::FETCH_OBJ);
			
            	$user = new Empleado();
            	$user->id = $fila->ID;
            	$user->nombre = $fila->NOMBRE;
            	$user->apellido = $fila->APELLIDO;
            	$user->nombre_usuario = $fila->NOMBRE_USUARIO;
            	$user->contraseña = $fila->CONTRASEÑA; 
                
				return $user;
			}catch(Exception $e){
            	echo $e->getMessage();
            	return null;
			}finally{
            	Conexion::cerrarConexion();
        	}	
    	}
    	public function update(UsuarioT $obj){
    		try {
				$sql = "UPDATE USUARIOT SET NOMBRE = ?, APELLIDO = ?, NOMBRE_USUARIO = ?, CONTRASEÑA= ? WHERE ID = ?";
            	$this->conectar();
            
            	$sentenciaSQL = $this->conexion->prepare($sql);			          
				$sentenciaSQL->execute(
					array(	$obj->nombre,
							$obj->apellido,
							$obj->nombre_usuario,
							$obj->contraseña,
							$obj->id )
						);
            	return true;
			} catch (Exception $e){
				echo $e->getMessage();
				return false;
			}finally{
            	Conexion::cerrarConexion();
        	}
    	}

    	public function delete($id){
    		try {
				$this->conectar();
            	$sentenciaSQL = $this->conexion->prepare("DELETE FROM USUARIOT WHERE ID = ?");          
            	$sentenciaSQL->execute(array($id));
            	return true;
			} catch (Exception $e){
            	return false;
			}finally{
            	Conexion::cerrarConexion();
        	}
        
    	}




	}

 ?>