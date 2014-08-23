<?php

include 'conectabd.php';

session_start();

$idusuario = $_GET['id'];
$comando = "DELETE FROM tabelausuario WHERE id = $idusuario ";

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>