 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>cadastro</title>
<?php

$nome =$_POST["nome"];
$idade=$_POST["idade"];
$cpf=$_POST["cpf"];
$telefone=$_POST["telefone"];

?>
</head>



<body>
<form method="post" action="cadastro_final.php">

	<input type="hidden" name="nome" value="<?php echo $nome; ?>"/>
	<input type ="hidden" name="idade" value="<?php echo $idade; ?>"/>
	<input type="hidden" name="cpf" value="<?php echo $cpf ; ?>"/>
	<input type="hidden" name="telefone" value="<?php echo $telefone; ?>"/>
	
	
	Cidade: <input type="name" name="cidade">
	Estado: <input type="text" name="estado">
	
	<input type="submit" value="proximo">
</body>
</html>