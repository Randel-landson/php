 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>cadastro</title>
<?php

$nome =$_POST["nome"];
$idade=$_POST["idade"];

?>
</head>



<body>
<form method="post" action="cadastro2_3.php">

	<input type="hidden" name="nome" value="<?php echo $nome; ?>"/>
	<input type ="hidden" name="idade" value="<?php echo $idade; ?>"/>
	
	Cpf: <input type="name" name="cpf">
	Telefone: <input type="number" name="telefone">
	
	<input type="submit" value="proximo">
</body>
</html>

