<h1>Listado de Personal</h1>

<?php
	//$plantilla = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
	$plantilla = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="table table-condensed table-hover table-bordered">' );
	$this->table->set_template($plantilla); 

	$i = 0;

	$this->table->set_heading('Nº', 'ID', 'R.U.T.', 'NOMBRES', 'APELLIDOS', 'PROFESION', 'EDITAR', 'ELIMINAR');
	foreach ($obtener_personal as $fila)
	{
		$this->table->add_row(++$i, $fila->id_empleado, $fila->rut, $fila->nombres, $fila->apellidos,
		 $fila->profesion, "<a href='$fila->id_empleado'><center><i class='icon-edit'></i></center></a>",
		  '<a href=""><center><i class="icon-remove"></i></center></a>' );
	}
	echo $this->table->generate(); 
?>

<div class="paginacion">
	<?php echo $paginacion ?>
</div>

<hr>
<p><?php echo anchor('empleados/nuevo_empleado', 'Nuevo Empleado', array('title'=>'Ingrese Nuevo Empleado', 'class'=>'btn btn-large btn-inverse')); ?></p>



