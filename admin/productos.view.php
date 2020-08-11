
<?php require 'encabezadoadmin.view.php'; ?>

<section class="main">
    <section class="acerca-de" id="acercade">
        <div class="contenedor">
            <div class="texto">
                <h3 class="titulo"  >Ingresa nuevos productos</h3>
            </div>
        </div>
    </section>
</section>

<table>
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Imagen</th>
			<th>Precio</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($refacciones as $refaccion): ?>
			<tr>
				<td><?php echo $refaccion['codigo'];?></td>
				<td><?php echo $refaccion['nombre'];?></td>
				<td><?php echo $refaccion['marca'];?></td>
				<td><?php echo $refaccion['img'];?></td>
				<td><?php echo $refaccion['precio'];?></td>
				<td><button>Eliminar</button><button>Editar</button></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>


<?php require '../views/footer.view.php' ?>