<?php

session_start();

if($_GET["id"]!=''){
	include 'conectabd.php';
	$comando = "select * from horario where id = ".$_GET["id"]."";
	$resultado = mysql_query($comando);
	$atributo=mysql_fetch_array($resultado);
}

?>
<div class="container" role="main">
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="salvahorario.php" method="post">
				<div class="well">Cadastro de Horário</div>

				<div class="page-header"></div>
				
				
					<!-- Um quadradinho daquele -->
				
				<div class="page-header">
					<h2 class="text-center">Cadastro de Horários</h2>
				</div>	
				<div class="row">
				<div class="col-sm-8">
					<div id="divnome" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Nome Completo</span>
							<input value="<?php echo $atributo['nome']; ?>" id="nome" name="nome" type="text" class="form-control" placeholder="digite o nome completo">
						</div>
						<br>
						<div id="divmatricula" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Matrícula</span>
							<input value="<?php echo $atributo['matricula']; ?>" id="matricula" name="matricula" type="text" class="form-control" placeholder="digite a matrícula">
						</div>
						<br>
					</div>	
					<div class="col-sm-8">
						<div id="divturma" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Turma</span>
							<input value="<?php echo $atributo['turma']; ?>" id="turma" name="turma" type="text" class="form-control" placeholder="digite o serviço a solicitar">
						</div>
						<br>
						<div id="divservico" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Serviço a Solicitar</span>
							<input value="<?php echo $atributo['servico']; ?>" id="servico" name="servico" type="text" class="form-control" placeholder="digite o serviço a solicitar">
						</div>
						<br>
						<div id="divdata" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> Data do Atendimento</span>
							<input value="<?php echo $atributo['data']; ?>" id="data" name="data" type="text" class="form-control" placeholder="digite a data do atendimento">
						</div>
						<br>
						<div id="divhorario" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Horário do Atendimento</span>
							<input value="<?php echo $atributo['horario']; ?>" id="horario" name="horario" type="text" class="form-control" placeholder="digite o horário da consulta">
						</div>
						
					</div>
					</div>
				<br>
				<hr>
				<div class="row" style="text-align:center;">
					<button type="button" class="btn btn-success btn-lg" onclick="salvar()"> Salvar <span class="glyphicon glyphicon-ok"></span></button>
					<button type="reset" class="btn btn-info btn-lg"> Limpar tudo <span class="glyphicon glyphicon-remove"></span></button>
					
				</div>
			</form>
		</div>
		
		<div class="panel-footer">Ficha de Solicitação</div>
		
	</div>
	
</div><!-- /container -->
<script>
    
    function salvar(){
		document.forms["cadastrohorario"].submit();
    }
</script>
