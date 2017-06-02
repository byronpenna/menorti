<!DOCTYPE html>
<html>
<head>
	<title>Sobre mi</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<style type="text/css">
		.vcenter {
		    display: inline-block;
		    vertical-align: middle;
		    float: none;
		}
	</style>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/Welcome/SobreMi/")."style.css"; ?> >
</head>
<body>    fergerte
	<?php 
		$this->load->view("parts/header.php");
	?>
	
	<div class="premisaAutor row marginNull">
		<div class="vcenter col-lg-4 contenedorImg">
			<img class="imgAutor" src=<?php echo base_url("content/img/general/autor.jpg") ?> >
		</div><!--
		--><div class="vcenter col-lg-8 detallePremisa">
			<div class="titulo">
				Leonardo Enrique Mendez (Leanen Menorti)
			</div>
			<div class="row marginNull">
				Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
				cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
			</div>
		</div>
	</div>
	<div class="row marginNull detalleCuerpo">
		<div class="titulo">
			Sobre mi
		</div>
		<div class="">
			
		</div>
	</div>

	<?php 
		$this->load->view("parts/footer.php");
	?>
</body>
</html>