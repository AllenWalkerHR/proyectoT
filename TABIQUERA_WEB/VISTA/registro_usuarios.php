
<!DOCTYPE html>
<html>
<head>
	<title>Registro usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="css/uikit-rtl.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"
		
	</style>
</head>
<body>
	<div class="uk-container uk-background-secondary">
		<form class="uk-margin-top" action="registro_usuarios.php" method="post">
			<div class="uk-flex uk-flex-column uk-flex-center">
				<div class="uk-margin-auto uk-margin-top">
					<div class="uk-form-controls">
						<div class="uk-inline">
							<span class="uk-form-icon" uk-icon="icon: user"></span>
							<input class="uk-input uk-form-width-large" type="text" name="nombre"  placeholder="Nombre">
						</div>
					</div>
				</div>
				<div class="uk-margin-auto uk-margin-top">
					<div class="uk-form-controls">
						<div class="uk-inline">
							<span class="uk-form-icon" uk-icon="icon: user"></span>
							<input class="uk-input uk-form-width-large" type="text" name="apellido"  placeholder="Apellidos">
						</div>
					</div>
				</div>
				<div class="uk-margin-auto uk-margin-top">
					<div class="uk-form-controls">
						<div class="uk-inline">
							<span class="uk-form-icon" uk-icon="icon: user"></span>
							<input class="uk-input uk-form-width-large" type="text" name="usuario"  placeholder="Nombre de usuario">
						</div>
					</div>	
				</div>
		
				<div class="uk-margin-auto uk-margin-top">
					<div class="uk-form-controls">
						<div class="uk-inline">
							<span class="uk-form-icon" uk-icon="icon: plus-circle"></span>
							<input class="uk-button uk-form-width-medium" type="submit" value="Agregar">
						</div>
					</div>
				</div>
			</div>
		
			
			
			
		</form>
	</div>
	
	
</body>
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/uikit-icons.min.js"></script>
</html>
<?php 
	require '../MODELO/USUARIOT.php';
	
	try {
		
		if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
			$usuario = new UsuarioT($_POST['nombre'],$_POST['apellido'],$_POST['usuario']);
			echo '<div class="uk-margin uk-card-body"><input class="uk-input uk-form-success" type="text" placeholder="form-success" value="'.$usuario->get_usuario().' ha sido agregado con exito"></div>';
		}
	} catch (Exception $e) {
		
	}
	
	
 ?>