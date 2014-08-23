<?php

include 'conectabd.php';

session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$turno = $_POST['turno'];
$servico = $_POST['servico'];



if($_POST['id']==""){
	$comando = "INSERT INTO agendamento VALUES ('', '".$nome."', '".$matricula."', '".$turno."', '".$servico."')";
}else{
	$comando = "UPDATE agendamento SET nome='".$nome."', matricula='".$matricula."', turno='".$turno."', servico='".$servico."' WHERE id=".$id."";
}

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>