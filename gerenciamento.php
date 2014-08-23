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
		
		<title>PASS</title>
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
		
		
		<!-- Mensagens -->
		<div id="mensagem" class="container" role="main">
			<?php
				if($_GET["mensagem"]=="sucesso"){
					echo "<div class=\"alert alert-success fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> <span class=\"glyphicon glyphicon-ok\"></span>  Tarefa executada com sucesso! </div>";
				}
				if($_GET["mensagem"]=="erro"){
					echo "<div class=\"alert alert-danger fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> <span class=\"glyphicon glyphicon-ban-circle\"></span>  Erro, tente executar a tarefa novamente! </div>";
				}
			?>
		</div>
	
	
		<!-- Container -->
			<?php
				$tipo = $_GET["tipo"];
				if($tipo == "ficha"){
						
					if($_GET["acao"]=="nova"){
						include "novaficha.php";
					} else if($_GET["acao"]=="listar"){
						include "listarfichas.php";
					}
				} else if($tipo == "usuario"){
					if($_GET["acao"]=="novo"){
						include "novousuario.php";
					} else if($_GET["acao"]=="listar"){
						include "listarusuarios.php";
					} else if($_GET["acao"]=="excluir"){
						include "excluirusuario.php";
					}
					} else if ($tipo == "horario"){
					if($_GET["acao"]=="novo"){
						include "cadastrohorario.php";
					} else if($_GET["acao"]=="listar"){
						include "listarhorario.php";
					} else if($_GET["acao"]=="excluir"){
						include "excluircadastro.php";
					}
					
				} else if($tipo == ""){
					include "inicio.php";
				}
			?>	
			
			
			
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="bootstrap/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>