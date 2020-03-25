<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Aula 5 - Desafio Conta Banco</title>
</head>

<body>
	<pre>
		<?php
		require_once 'ContaBanco.php';

		$conta1 = new ContaBanco(1, "CC","Luiza", 10.0);
		
		/*
		print ("
		{$conta1->depositar(100)} \n
		{$conta1->pagarMensal()} \n
		{$conta1->sacar(10)} \n
		{$conta1->getSaldo()} \n
		");
		*/
		
		$conta1->sacar(10);
		$conta1->fecharConta();

		?>
	</pre>
</body>

</html>