<?php
	include_once '../app/autoload.inc.php';
    $tipo = $_GET['tipo'];
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
			<div id="reB">
				<img src="../img/iconos/salida.png">
				<p>Regresar</p>			
			</div>
		</div>
		<div id="contenido"> <!-- area del contenido -->
			<?php include_once '../partes/nuevo.inc.php'; ?>
		</div>
	</div>
	<script type="text/javascript" src="../js/accNue.js"></script>
</body>
</html>