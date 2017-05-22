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
				<div class="cuerpoTarjeta">
					<div class="headTarjeta">
						<img src=<?php echo base_url("content/img/general/fbIcono.png") ?>>
						<img src=<?php echo base_url("content/img/general/youtubeIcono.png") ?>>
					</div>
					<div class="entrada">
						<div class="titulo">Se descubre un gran secreto</div>
						<div class="cuerpoEntrada">
							Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
						</div>
						<a href="#">
							<div class="footEntrada">
								Leer mas
							</div>	
						</a>
						
					</div>
					<div class="entrada">
						<div class="titulo">Se descubre un gran secreto</div>
						<div class="cuerpoEntrada">
							Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
						</div>
						<a href="#">
							<div class="footEntrada">
								Leer mas
							</div>	
						</a>
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">

			<div class="row marginNull Promociones">
				<div class="row marginNull contenidoGaleria">
					<div class="col-lg-3 promo selectedPromo">
						<img src=<?php echo base_url("content/img/welcome/index/portada1.jpg") ?> >
						<div class="price">
							$9.99
						</div>
					</div>
					<div class="col-lg-3 promo">
						<img src=<?php echo base_url("content/img/welcome/index/portada2.jpg") ?> >
						<div class="price">
							$9.99
						</div>
					</div>
					<div class="col-lg-3 promo">
						<img src=<?php echo base_url("content/img/welcome/index/portada1.jpg") ?> >
						<div class="price">
							$9.99
						</div>
					</div>
					<div class="col-lg-3 promo">
						<img src=<?php echo base_url("content/img/welcome/index/portada2.jpg") ?> >
						<div class="price">
							$9.99
						</div>
					</div>
				</div>
				<div class="texto">
					<div class="contenido">
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
					</div>
					<div class="llamadoAccion">
						<div class="btn-group btn-block">
							<button class="btn col-lg-6 btn-default botonCompra">
								¡Compralo ya!
							</button>
							<button class="btn col-lg-6 btn-default botonCompra">
								Recomendalo
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row marginNull">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Menorti 1 -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-7161297069626668"
				     data-ad-slot="6228773038"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</div>
</div>
<?php 
	$this->load->view("parts/footer.php");
?>
</body>
</html>