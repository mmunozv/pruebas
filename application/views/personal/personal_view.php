<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/micss.css') ?>" rel="stylesheet">
		<title> Mi Sitio </title>
	</head>
	<body>

<h1>Listado de Personal</h1>
<pre>
<?php

$plantilla = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
$this->table->set_template($plantilla); 

$i = 0;

$this->table->set_heading('Nº', 'ID', 'R.U.T.', 'NOMBRES', 'APELLIDOS', 'PROFESION');
foreach ($obtener_personal as $fila)
{
	$this->table->add_row(++$i, $fila->id_empleado, $fila->rut, $fila->nombres, $fila->apellidos, $fila->profesion );
}
echo $this->table->generate(); 
?>

<div class="paginacion">
	<?php echo $paginacion ?>
</div>

</body>
</html>

