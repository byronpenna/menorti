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
			
		</div>
		<div class="col-lg-8 seccionLibros" >
			<div class="libro actual">
				<input type="hidden" class="txtHDUrlCompra" value="https://www.bookdepository.com/Romance-de-Las-Rosas-Leonardo-E-Mendez/9781463357450">
				<div class="pasta"></div>
				<div class="contenido">
					<div class="row marginNull head">
						<div class="row marginNull saga">
							Romance de las rosas
						</div>
						<div class="row marginNull titulo">
							Amor apasionado en cenizas.
						</div>	
					</div>
					<div class="portada">
						<img src=<?php echo base_url("content/img/welcome/index/portada1.jpg") ?>>
					</div>
				</div>
			</div>
			<div class="libro" style="display: none">
				<input type="hidden" class="txtHDUrlCompra" value="https://www.bookdepository.com/Romance-de-Las-Rosas-Segundo-Libro-Eternidad-y-Obsesion-Leonardo-E-Mendez/9781463367886">
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
			<div class="col-lg-2 nav navLeft text-right" direccion='0' style="font-size: 2em">
				<i class="fa fa-chevron-left" aria-hidden="true"></i>
			</div>
			<div class="col-lg-offset-4 col-lg-3">
				<a href="https://www.bookdepository.com/Romance-de-Las-Rosas-Leonardo-E-Mendez/9781463357450" target="_blank" class="btn botonComprar btn-block">Comprar ahora</a>	
			</div>
			<div class="col-lg-2 nav navRight text-right" direccion='1' style="font-size: 2em">
				<i class="fa fa-chevron-right" aria-hidden="true"></i>
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
				Un espiritu celestial llamado Jovem Levid es enviado por Dios a la Tierra, antes del diluvio, para proteger a una mujer 
				que sera la ascendencia de las primogenitas sagradas. 
				Jovem Levid sacrifica sublimemente su sentir esencial, ofreciendo todo lo que existe en su corazon, para la proteccion de la ultima 
				primogenita que nace de la anterior primogenita.
				Los anos transcurren, y el espiritu celestial enviado cumple fielmente su mision en la Tierra; cuidando y protegiendo con su vida a la descendencia consagrada. 
			</div>
		</div>
	</div>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/index/functions.js")  ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/index/script.js")  ?> ></script>
</body>
</html>