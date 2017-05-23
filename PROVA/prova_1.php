<?php

$questao_1 = $_GET["questao_1"];

$questao_2 = $_GET["questao_2"];
$questao_3 = $_GET["questao_3"];
$questao_4 = $_GET["questao_4"];
$questao_5=  $_GET["questao_5"];


$correta = 0 ;
$nota = 0;
$errada =  0 ;

if($questao_1 == "c")
{
	echo "Questao 1 esta correta."."<br>";
	$correta+=1;
	$nota+=2;
}
else
{
	echo"Questao 1 esta errada"."<br>";
	$errada+=1;
}
if($questao_2 == "d")
{
	echo "Questao 2 esta correta."."<br>";
	$correta+=1;
	$nota+=2;
}
else
{
echo"Questao 2 esta errada"."<br>";
	$errada+=1;	
}
if($questao_3 == "a")
{
	echo "Questao 3 esta correta."."<br>";
	$correta+=1;
	$nota+=2;
}
else
{
echo"Questao 3 esta errada"."<br>";
	$errada+=1;	
}
if($questao_4 == "e")
{
	echo "Questao 4 esta correta."."<br>";
	$correta+=1;
	$nota+=2;
}
else
{
echo"Questao 4 esta errada"."<br>";
	$errada+=1;	
}
if($questao_5 == "b")
{
	echo "Questao 5 esta correta."."<br>";
	$correta+=1;
	$nota+=2;
}
else
{
echo"Questao 5 esta errada"."<br>";
	$errada+=1;	
}
echo"Questoes acertadas foram ".$correta."<br>";
echo"Questoes erradas foram ".$errada."<br>";
echo"Sua nota final e $nota";


?>
