<?php
session_start();
include 'conectabd.php';
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:index.php?erro=2');
}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>CFO</title>
		<link href="css/gerenciamento.css" rel="stylesheet">
		<link href="css/navbar.css" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body style="background-color:#eee;">

		<!-- Navbar Fixa -->
		<?php include "navbar.php"; ?>
		
<div class="row" >
  <div class="col-sm-8 col-md-6">
    
    <div class="thumbnail">
      <img data-src="holder.js/300x200" src="imagens\ovelha.png" class="img-circle">
      <div class="caption">
        <h3>Sobre o projeto de cadastro de fêmeas ovinas</h3>
        <p>Esta plataforma foi desenvolvida com o objetivo de facilidar e agilizar o dia-a-dia dos zootecnistas do IFRN Campus Apodi, esta facilidade advém do cadastro de fêmeas ovinas do campus</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
<div class="col-sm-8 col-md-6">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" src = "imagens\ifrnapodi.png">
      <div class="caption">
        <h3>Sobre os desenvolvedores</h3>
        <p>Os desenvolvedores desta plataforma são alunos do curso Técnico em Informática do IFRN Campus Apodi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  
  
 </div>
