<?php
/*-- AQUIM VEM O FORMULARIO PARA CRIAÇÃO DE UMA CONTA NO SISTEMA.*/
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Usuario</title>

	</head>

	<body>
	<!--AQUI PARTE DE CIMA DO CABEÇALHO!-->

		<form method="post" action="recebe_cadastro_bd.php"/>
		<center>
			<table border="1" cellpadding="0" cellspacing="0" width="890" bordecolor="#008000" height="20">
			<tr>
				<td width="50%" bgcolor="#32CD32" height="19"><p align="center">
					<font color="#ffffff" face="arial" size="3"><b>Criar - Conta</b></font></td>

				</tr>

				<!--AQUI TERMINA A PARTE DE CIMA DO CABEÇALHO!-->



					<!--AQUI VEM TODA A CONSTRUÇAO DO FORMULARIO DO SITE PARA O CADASTRO. ATÉ O FINAL DA PÁGINA!-->
				<tr>
			    	<td>
						<p align="center">Nome <input type="text" name="nome" size="15"/><br><br></p>

						<p align="center">Sobrenome <input type="text" name="sobrenome" size="15"/><br><br></p>

						<p align="center">Data Nascimento <input type="date" name="data" size="15"/></p>

						<p align="center">Sexo
					    <input type="radio" value="masculino" name="sexo"/>Masculino
						<input type="radio" value="femino" name="sexo"/>Femenino</p>

						<p align="center">Criar Username  <input type="text"  name="cr_nome"/><br><br>

						<p align="center">Criar Senha  <input type="password"  name="cr_senha"/>
						<h6><p align="center">O CAMPO SENHA SÓ PODE TER NÚMEROS</p></h6>

						<p align="center">Telefone  <input type="tel"  name="fone"/><br><br>

						<p align="center">Email <input type="text" name="email" /><br><br></p>

				  <p align="center"> <input type="submit" value="cadastra"/></p>
</td>
</tr>
</table>
</center>


	</body>
</html>
