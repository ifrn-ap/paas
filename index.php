<?php
session_start();
session_unset(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>PASS - login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
	<div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<center><a class="navbar-brand" href="">PASS - PROJETO DE AGENTAMENTO SETOR SAÚDE</a></center>
			</div>
		</div>
	</div>

	
    <div class="container">
		<form class="form-signin" role="form" action="autenticacao.php" method="post">
			<h2 class="form-signin-heading">Faça seu login</h2>
			<input name="email" type="email" class="form-control" placeholder="Digite seu email" required autofocus>
			<input name="senha" type="password" class="form-control" placeholder="Digite sua senha" required>
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Lembre-me
			</label>
			<hr>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			
		

			<?php
				if($_GET['erro']==1){
					echo "<div class=\"alert alert-danger fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  Email ou senha inválido! </div>";
				}else if($_GET['erro']==2){
					echo "<div class=\"alert alert-danger fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> Você precisa estar logado! </div>";
				}
			?>
		
		
		
		
	
	
	  
    </div> <!-- /container -->
	

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
