<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title ?></title>
</head>
<body>
	<div>
		<p>MANTENCION</p>
		<form name="tabla" action="http://localhost/pruebas/mantenimiento/accion" method="POST">
			<table border="solid">
				<thead>
					<tr>
						<th></th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Direccion</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $u):?>

					<tr>
						<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>
						<td><?=$u->Nombre?></td>
						<td><?=$u->Telefono?></td>
						<td><?=$u->Email?></td>
						<td><?=$u->Direccion?></td>
					</tr>

				<?php endforeach;?>
			</tbody>
		</table>
		<input type="submit" value="Editar" />
	</form>
</div>
<hr>
<div>
	<p>ALTA</p>
	<form name="alta" action="http://localhost/pruebas/mantenimiento/alta" method="POST">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="txtNombre" /></td>
			</tr>
			<tr>
				<td>Telefono</td>
				<td><input type="text" name="txtTelefono" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="txtEmail" /></td>
			</tr>
			<tr>
				<td>Direccion</td>
				<td><input type="text" name="txtDireccion" /></td>
			</tr>
		</table>
		<input type="submit" value="Alta"/>
	</form>
</div>
<hr>
<div>
	<p>BAJA</p>
	<form name="baja" action="http://localhost/pruebas/mantenimiento/baja" method="POST">
		<table>
			<tr>
				<td>Nombre: </td><td><input name="txtNombre" type="text"/></td>
			</tr>
		</table>
		<input type="submit" value="Borrar" />
	</form>
</div>
<hr>
<a href="<?= base_url() ?>">Menu Principal</a>
</body>
</html>