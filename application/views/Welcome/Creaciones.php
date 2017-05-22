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
	
	<?php 
		$this->load->view("parts/footer.php");
	?>
</body>
</html>