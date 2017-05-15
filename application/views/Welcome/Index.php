<!DOCTYPE html>
<html>
<head>
	<title>Titulo</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/Welcome/Index/")."style.css"; ?> >
</head>
<body>

<?php 
$this->load->view("parts/header.php");
?>
<div class="cuerpo">
	<div class="slider">
		<img  src=<?php echo base_url("content/img/welcome/index/11.jpg") ?>>
	</div>
	<div class="row marginNull seccion">
		<div class="col-lg-6">
			<div class="tarjeta">
				<div class="imagenRepresentativa">
					
				</div>
				<div class="cuerpoTarjeta"></div>
			</div>
		</div>
		<div class="col-lg-6"></div>
	</div>
</div>
<?php 
	$this->load->view("parts/footer.php");
?>
</body>
</html>