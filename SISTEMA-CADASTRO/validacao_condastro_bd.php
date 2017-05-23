<?php

/*-- AQUI VEM A VERIFICAÇÃO DA CONTA DO CLIENTE NO BANCO E DADOS PARA VALIDA O ACESSO DO MESMO*/

	$user_nome = $_POST["nome"];
	$user_senha = $_POST["senha"];
	
	include'conecta_banco.php';
	
		$conecta_banco = mysqli_select_db($conexao , 'cadastro');
	
		$sql_teste = "SELECT * FROM usuaruio WHERE login ='$user_nome' AND senha = '$user_senha'";
	
		$result_sql = mysqli_query($conexao , $sql_teste);
		
		$result_linha = mysqli_affected_rows($conexao);
		
		if($result_linha > 0){
			echo"TEM ACESSO";
		}else{
			echo"NÃO TEM ACESSO";
		}
		mysqli_close($conexao);
?>
