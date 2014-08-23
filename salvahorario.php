<?php

include 'conectabd.php';

session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['matricula'];
$senha = $_POST['servico'];
$senha = $_POST['data'];
$senha = $_POST['horario'];


if($_POST['id']==""){
	$comando = "INSERT INTO tabelausuario VALUES ('', '".$nome."', '".$matricula."', '".$servico."', '".$data."', '".$horario."')";
}else{
	$comando = "UPDATE tabelausuario SET nome='".$nome."', matricula='".$matricula."', servico='".$servico."', data='".$data."', horario='".$horario."' WHERE id=".$id."";
}

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>