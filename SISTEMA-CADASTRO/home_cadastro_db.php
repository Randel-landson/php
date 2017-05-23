<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <title>Entre ou Cadastrese</title>

</head>
<body>

<!--aqui e aparte de cima do cadastro do site!-->


	<center>
		<table border="1" cellpadding="0" cellspacing="0" width="890" bordecolor="#008000" height="20">
			<tr>
				<td width="50%" bgcolor="#32CD32" height="19"><p align="center">
				<font color="#ffffff" face="arial" size="3"><b>FAZER LOGIN</b></font></td>


				<td whidth="33%" bgcolor="#32CD32" heitht="19"><p align="center">
				<font color="#ffffff" face="arial" size="3"><b>CRIA CONTA</b></font></td>
			</tr>

		</center>

<!--aqui termina  a parte de cima do cadastro do site!-->

			<tr>
<!---	parte do login do usuario 	!-->

				<td width="33%" rowspan="3" valign="top" height="120">

					<form method="post" action="validacao_condastro_bd.php">

						<p align="center">

							Username <input type="text" name="nome" size="20"/><br><br>

							Senha   <input type="password" name="senha" size="15"/><br><br>
							<form method="post" action="long.php">
								<input type="submit" value="INCIAR SESSAO" size="15"/>
							</form>
						</p>

					</form>

				</td>

<!---	parte do login do usuario 	!-->

	 <td width="33%" rowspan="3" valign="top" height="120">
		<form method="post" action="criar_conta_bd.php">
			<p align="center"><br><br>
				<input type="submit" value="cadastra"/>
			</p>
		</form>
	</td>
</body>
</html>
