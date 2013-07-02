<h1>Listado de Personal</h1>
<pre>
<?php

$plantilla = array ( 'table_open'  => '<table border="2" cellpadding="2" cellspacing="1" class="mytable">' );
$this->table->set_template($plantilla); 

$this->table->set_heading('ID', 'R.U.T.', 'NOMBRES', 'APELLIDOS', 'PROFESION');
foreach ($obtener_personal as $fila)
{
	$this->table->add_row($fila->id_empleado, $fila->rut, $fila->nombres, $fila->apellidos, $fila->profesion );
}
echo $this->table->generate(); 

?>