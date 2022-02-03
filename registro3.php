<html lang="es">
	<head>
	 <!-- Bootstrap -->
	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
       
	</head>
	
	<body>
	<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            
                          "Operacion completada"</div>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" >
            <h1 class="animate__animated animate__backInLeft"> Modificacion de usuarios </h1>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text"  id="nombre" name="nombre" placeholder="Nombre" >
					</div>
				</div>
								<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text"  id="usuario" name="usuario" placeholder="Ingrese usuario" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="contraseña" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" id="contraseña"  name="contraseña" placeholder="Ingrese contraseña">
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_cargo" class="col-sm-2 control-label">Cargo</label>
					<div class="col-sm-10">
						<select  id="id_cargo"  name="id_cargo">
							<option value="Administrador">1</option>
							<option value="Empleado">2</option>
							
						</select>
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="principal.php" class="btn btn-default">Regresar</a>
                        <a href="modificar2.php" class="btn btn-default">Modificar</a>
												 
					</div>
				</div>
			</form>
		</div>
	
        
	</body>
</html>

 


