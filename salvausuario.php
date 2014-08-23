<?php

include 'conectabd.php';

session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if($_POST['id']==""){
	$comando = "INSERT INTO tabelausuario VALUES ('', '".$nome."', '".$email."', '".$senha."')";
}else{
	$comando = "UPDATE tabelausuario SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE id=".$id."";
}

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>