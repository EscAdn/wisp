<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo COMPANY; ?></title>
	<!-- Librerias externas -->
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/librerias/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/librerias/bootstrap/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/menuLateral.css">
</head>
<body>

	<?php 
	require_once "./controladores/vistasControlador.php";
	$vt= new vistasControlador();
	$vistasR=$vt->obtener_vistas_controlador();
	$filejs=$vt->obtener_js_controlador();

	require_once "./vistas/modelo/menu.php";
	?>
		<section class="contenido">
				<!-- Content page -->
				<?php 
				if($vistasR == "login"){
					require_once "./vistas/contenido/home-view.php";
				}else{
				 	require_once $vistasR;
				 }
				?>
			</section>
	<?php
		require_once './vistas/modelo/scripts.php';
	?>

	<script>
		<?php require_once $filejs; ?>
	</script>
	
	<!-- <script type="text/javascript" src="js/grafica.js"></script> -->

</body>
</html>