<!DOCTYPE html>
<html>
<head>
	<title>Titulo</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/Welcome/Index/")."stylei.css"; ?> >
</head>
<body>
	<?php 
	$this->load->view("parts/headeri.php");
	?>
	<div class="row verdeFuerte marginNull text-center tituloPaginaHome">
		<p>Sitio oficial</p>
		<h1>Leanen Menorti</h1>
	</div>	
	<div class="row marginNull verdeFuerte">
		<div class="col-lg-offset-2 col-lg-8" >
			<div class="libro">
				<div class="pasta"></div>
				<div class="contenido">
					<div class="row marginNull head">
						<div class="row marginNull saga">
							Romance de las rosas
						</div>
						<div class="row marginNull titulo">
							Beso Inocente
						</div>	
					</div>
					<div class="portada">
						<img src=<?php echo base_url("content/img/welcome/index/portada1.jpg") ?>>
					</div>
				</div>
			</div>
		</div>
		<div class="row marginNull verdeClaro lineaCompra">
			<div class="col-lg-offset-6 col-lg-3">
				<a href="#" class="btn botonComprar btn-block">Comprar ahora</a>	
			</div>
		</div>
	</div>
</body>
</html>