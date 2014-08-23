<?php

include 'conectabd.php';

session_start();


//Criar a paginação e exibir os dados dos usuarios
$limite = 10;
$pagina = $_GET['pag'];
if($pagina == ""){ $pagina = 1; }
$inicio = ($pagina * $limite) - $limite;
$comando = "SELECT * FROM horario LIMIT ".$inicio.",".$limite."";
$resultado = mysql_query($comando);

//contar o total de usuarios pra paginação ficar correta
$comando2 = mysql_query("SELECT id FROM horario");
$total_registros = mysql_num_rows($comando2);
//Ceil arrendoda pra cima. :D 
$total_paginas = Ceil($total_registros / $limite);


?>
<div class="container" role="main">
	<div class="panel panel-default">
		<div class="panel-body">

			<div class="well">Listar Horários de Atendimento</div>

			<div class="page-header">
				<h2 class="text-center">Solicitações</h2>
			</div>
			
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome Completo</th>
						<th>Matrícula </th>
						<th>Serviço Solicitado</th>
						<th>Data da Consulta</th>
						<th>Horário da Consulta</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($atributo=mysql_fetch_array($resultado)){
				?>
						<tr>
							<td><?php echo $atributo['id']; ?></td>
							<td><?php echo $atributo['nome']; ?></td>
							<td><?php echo $atributo['matricula']; ?></td>
							<td><?php echo $atributo['servico']; ?></td>
							<td><?php echo $atributo['data']; ?></td>
							<td><?php echo $atributo['horario']; ?></td>
							
							<td>
								<a href="?tipo=ficha&acao=nova&id=<?php echo $atributo['id']; ?>" type="button" onclick="return confirm('Deseja editar?');" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="excluirficha.php?id=<?php echo $atributo['id']; ?>" type="button" onclick="return confirm('Deseja excluir?');" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
				<?php
					}
				?>
				</tbody>
			</table>
			<hr>
			<div class="row" style="text-align:center;">
				<ul class="pagination">
					<?php 
						for($i=1; $i <= $total_paginas; $i++){
							if($pagina == $i){
								echo "<li class=\"active\"><a href=\"#\">".$i."</a></li>";
							}else{
								echo "<li><a href=\"?tipo=horario&acao=listar&pag=".$i."\">".$i."</a></li>";
							}
						}
					?>
				</ul>
			</div>
			
		</div>

			
			
			
		
		
		<div class="panel-footer">Panel footer</div>
		
	</div>
	
</div><!-- /container -->