<?php
	include_once '../app/autoload.inc.php';

    $codigo = $_GET['codigo'];
    $tipo = $_GET['tipo'];

    Conexion::abrirConexion();

    $equipo = RepositorioEquipo::obtenerEquipoPorNombre(Conexion::obtenerConexion(), $codigo);
	$statu = RepositorioStatu::obtenerStatuPorNombre(Conexion::obtenerConexion(), $codigo);

    Conexion::cerrarConexion();

?>

<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar</title>
	<link rel="icon" type="image/x-icon" href="../favicon.jpg">
	<link rel="stylesheet" type="text/css" href="../css/g_estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/elementos_g.css">
	<link rel="stylesheet" type="text/css" href="../css/animations.css">
    <link rel="stylesheet" type="text/css" href="../css/mostrar.css">
</head>
<body>
	<div class="nav sombra">
		<img id="icono" src="../favicon.jpg">
	</div>
	<div class="content">
		<div id="menu">
			<h2>Menu</h2>
			<div id="verB" class="menuSel">
				<img src="../img/iconos/ojo.png">
				<p>Ver</p>			
			</div>
			<div id="ediB">
				<img src="../img/iconos/lapiz.png">
				<p>Editar</p>			
			</div>
			<div id="boB">
				<img src="../img/iconos/basura.png">
				<p>Borrar</p>			
			</div>
			<div id="reB">
				<img src="../img/iconos/salida.png">
				<p>Regresar</p>			
			</div>
		</div>
		<div id="contenido"> <!-- area del contenido -->
			<div id="ver">
				<?php include_once '../partes/ver.inc.php'; ?>
			</div>
			<div id="editar" class="ocultar">
				<?php include_once '../partes/editar.inc.php'; ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/accMos.js"></script>
</body>
</html>