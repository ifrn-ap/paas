<?php

session_start();

if($_GET["id"]!=''){
	include 'conectabd.php';
	$comando = "select * from tabelausuario where id = ".$_GET["id"]."";
	$resultado = mysql_query($comando);
	$atributo=mysql_fetch_array($resultado);
}

?>
<div class="container" role="main">
	<div class="panel panel-default">
		<div class="panel-body">
			<form name="novousuario" action="salvausuario.php" method="post">
				<div class="well">Novo usuario</div>
				<div id="erro"></div>
				

				<div class="page-header">
					<h2 class="text-center">Cadastro de novo usuário</h2>
				</div>
				
				<div class="row">
					<input name="id" id="id" value="<?php echo $atributo['id']; ?>" type="hidden" /> 
				
					<div class="col-sm-8">
						<div id="divnome" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>  Nome</span>
							<input value="<?php echo $atributo['nome']; ?>" id="nome" name="nome" type="text" class="form-control" placeholder="digite o nome">
						</div>
						<br>
						<div id="divemail" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Email</span>
							<input value="<?php echo $atributo['email']; ?>" id="email" name="email" type="text" class="form-control" placeholder="digite o email">
						</div>
						<br>
					</div>
					<div id="divsenha" class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input value="<?php echo $atributo['senha']; ?>" id="senha" name="senha" type="password" class="form-control" placeholder="digite a senha">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input id="confirmasenha" name="confirmasenha" type="password" class="form-control" placeholder="digite novamente a senha">
						</div>
					</div>
				</div>
				<hr>
				<div class="row" style="text-align:center;">
					<button type="button" class="btn btn-success btn-lg" onclick="validar()"> salvar <span class="glyphicon glyphicon-ok"></span></button>
					<button type="reset" class="btn btn-info btn-lg"> limpar tudo <span class="glyphicon glyphicon-remove"></span></button>
					
				</div>
			</form>

		</div>
		
		<div class="panel-footer">Panel footer</div>
		
	</div>
</div>


<script>
    function validar(){
		var nome = document.getElementById("nome").value;
		var email = document.getElementById("email").value;
        var senha = document.getElementById("senha").value;
		var confirmasenha = document.getElementById("confirmasenha").value;
		if(nome != "" && email != "" && senha != ""){
			if (senha == confirmasenha){
				salvar();
			}else{ 
				document.getElementById('erro').innerHTML = "<div class=\"alert alert-danger fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  Senhas não conferem! </div>";
				document.getElementById("divsenha").setAttribute("class","col-sm-4 has-error");
			}
		}else{
			if(nome == ""){
				document.getElementById("divnome").setAttribute("class","input-group has-warning");
			}else{
				document.getElementById("divnome").setAttribute("class","input-group");
			}
			if(email == ""){
				document.getElementById("divemail").setAttribute("class","input-group has-warning");
			}else{
				document.getElementById("divemail").setAttribute("class","input-group");
			}
			if(senha == "" || confirmasenha == ""){
				document.getElementById("divsenha").setAttribute("class","col-sm-4 has-warning");
			}
			document.getElementById('erro').innerHTML = "<div class=\"alert alert-warning fade in\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  Preencha os campos corretamente. </div>";
		}
    }
    
    
    function salvar(){
		document.forms["novousuario"].submit();
    }
</script>