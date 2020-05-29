<!DOCTYPE HTML>
<html>
	<head>
		<title>Curso - Uniom Team</title>
		<meta charset="utf-8"> <!-- reconhece a linguagem html -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/css/style.css"?>"> <!-- chama o estilo -->
		<script type="text/javascript" src="js/jquery-min.js"></script> <!-- chama o jquery -->
		<script type="text/javascript" src="js/js.js"></script> <!-- chama o js personalizado -->
	</head>
	<body>
		<div class="conteudo">
			<div class="base-central">
                <?php include "cabecalho.php" ?>
                <?php $this->load($view, $viewDados) ?>
                <?php include "rodape.php" ?>
			</div>
		</div>
	</body>
</html>