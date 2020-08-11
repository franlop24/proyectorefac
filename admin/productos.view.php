
<?php require 'encabezadoadmin.view.php'; ?>

<section class="main">
        <section class="acerca-de" id="acercade">
            <div class="contenedor">
                <div class="texto">
                    <h3 class="titulo"  >Ingresa nuevos productos</h3>
                </div>
            </div>
        </section>



<body>
    <div class="content-all">
	<section id="container">
	
		<div class="form_register">
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

			<form action="" method="post">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
				<label for="correo">Marca</label>
				<input type="email" name="correo" id="correo" placeholder="Correo electrónico">
				<label for="usuario">Descripcion</label>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario">
				<label for="clave">Codigo</label>
				<input type="password" name="clave" id="clave" placeholder="Clave de acceso">
				<label for="rol">Seccion</label>

				<?php 

					$query_rol = mysqli_query($conection,"SELECT * FROM secciones");
					mysqli_close($conection);
					$result_rol = mysqli_num_rows($query_rol);

				 ?>

				<select name="rol" id="rol">
					<?php 
						if($result_rol > 0)
						{
							while ($rol = mysqli_fetch_array($query_rol)) {
					?>
							<option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
					<?php 
								# code...
							}
							
						}
					 ?>
				</select>
				<input type="submit" value="Crear usuario" class="btn_save">

			</form>


		</div>


	</section>

    </div>
</body>
</html>