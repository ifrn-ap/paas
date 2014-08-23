<?php

include 'conectabd.php';

session_start();

$idovino = $_GET['id'];
$comando = "DELETE FROM tabelaovino WHERE id = $idovino ";

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>