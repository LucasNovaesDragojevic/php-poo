<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Aula 3\ - POO com PHP</title>
</head>

<body>
	<pre>
		<?php
		require_once 'Caneta.php';

		$canetaBIC = new Caneta("BIC", "AZUL", 0.5);
		print_r($canetaBIC);
		?>
	</pre>
</body>

</html>