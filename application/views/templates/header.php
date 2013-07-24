<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?php echo base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">



		<title> Control CCGG </title>
	</head>
	<body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <a class="brand" href="#">Control de Obras</a>
                    <ul class="nav">
                        <li class="active"><a href="http://localhost/pruebas/empleados">Inicio</a></li>
                        <li><a href="http://localhost/pruebas/empleados/nuevo_empleado">Ingresar</a></li>
                        <li><a href="http://localhost/pruebas/empleados/ver_personal">Consultar</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Opciones
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('empleados/nuevo_empleado') ?>">Ingreso</a></li>
                                <li><a href="<?= base_url('empleados/ver_personal') ?>">Consulta</a></li>
                                <li class="divider"></li>
                                <li><a href="<?= base_url('empleados/ver_personal') ?>">Otra consulta</a></li>
                                <li><a href="<?= base_url('empleados/nuevo_empleado') ?>">Otro Ingreso</a></li>
                                <li class="divider"></li>
                                <li><a href="<?= base_url('productos/administracion') ?>">Administración</a></li>
                                <li class="divider"></li>
                                <li><a href="<?= base_url('mantenimiento') ?>">CRUD</a></li>                                            </ul>
                        </li>
                    </ul>


                    <form class="navbar-search pull-left">
                        <input type="text" class="search-query" placeholder="Buscar">
                    </form>

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
