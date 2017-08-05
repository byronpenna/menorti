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
	<div class="row marginNull verdeFuerte rowPrincipalBaner">
		<div class="col-lg-2 nav" direccion="0" >
			<
		</div>
		<div class="col-lg-8 seccionLibros" >
			<div class="libro actual">
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
			<div class="libro" style="display: none">
				<div class="pasta"></div>
				<div class="contenido">
					<div class="row marginNull head">
						<div class="row marginNull saga">
							Romance de las rosas
						</div>
						<div class="row marginNull titulo">
							Eternidad y obsesión
						</div>	
					</div>
					<div class="portada">
						<img src=<?php echo base_url("content/img/welcome/index/portada2.jpg") ?>>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-2 nav" direccion='1' >
			
		</div>
		<div class="row marginNull verdeClaro lineaCompra">
			<div class="col-lg-2 nav text-right" direccion='0' style="font-size: 2em">
				<
			</div>
			<div class="col-lg-offset-4 col-lg-3">
				<a href="#" class="btn botonComprar btn-block">Comprar ahora</a>	
			</div>
			<div class="col-lg-2 nav text-right" direccion='1' style="font-size: 2em">
				>
			</div>
		</div>
	</div>
	<div class="row marginNull negroMate rowSobreMi">
		
		<div class="col-lg-6 imagen">
			<img src=<?php echo base_url("content/img/welcome/index/me.png") ?>>
		</div>
		<div class="col-lg-6 contenido">
			<div class="titulo">Sobre mi</div>
			<div class="cuerpo">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
				laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
				Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
 				odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
 				Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
			</div>
		</div>
	</div>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/index/functions.js")  ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/index/script.js")  ?> ></script>
</body>
</html>