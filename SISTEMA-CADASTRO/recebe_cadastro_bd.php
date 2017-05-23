<?php

	// AQUI ONDE RECEBE AS INFORMAÇOES DO CADASTRO.

	$nome = $_POST["nome"];
	$sobre = $_POST["sobrenome"];
	$dta = $_POST["data"];
	$sexo = $_POST["sexo"];
	$cr_nome = $_POST["cr_nome"];
	$cr_senha = $_POST["cr_senha"];
	$telef = $_POST["fone"];
	$email = $_POST["email"];
	// AQUI TERMINA AS INFORMAÇOES DO CADASTRO.

	//AQUI INCIAR A CONEXÃO COM O BANCO.
	include 'conecta_banco.php';

	$conecta_db = mysqli_select_db($conexao , "cadastro");

	// AQUI INCIAR O CADASTRO NO BANCO

	$sql_cadastro = "INSERT INTO usuaruio VALUES(NULL ,'$nome' , '$sobre' , '$dta' , '$sexo','$cr_nome' ,$cr_senha ,'$telef','$email')";

	$cadastra_user = mysqli_query($conexao , $sql_cadastro);

	$linha_cad = mysqli_affected_rows($conexao);

	if($linha_cad == 1){
		echo "cadastro realizado com sucesso.";

		echo"<nav>";

		echo"<A href='home_cadastro_db.php'>VOLTA PARA PAGINA DE LOGIN";

		echo"</nav>";

	}else{
		echo"erro no cadastro!";

	}
	// ATE AQUI E O CADSTRO NO BANCO.
	mysqli_close($conexao);
?>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>termino de cadastro</title>
		<style>
			a{
				text-decoration:none;
			}
		</style>
	</head>

	<body>

	</body>