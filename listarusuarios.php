<?php

include 'conectabd.php';

session_start();


//Criar a paginação e exibir os dados dos usuarios
$limite = 10;
$pagina = $_GET['pag'];
if($pagina == ""){ $pagina = 1; }
$inicio = ($pagina * $limite) - $limite;
$comando = "SELECT * FROM tabelausuario LIMIT ".$inicio.",".$limite."";
$resultado = mysql_query($comando);

//contar o total de usuarios pra paginação ficar correta
$comando2 = mysql_query("SELECT id FROM tabelausuario");
$total_registros = mysql_num_rows($comando2);
//Ceil arrendoda pra cima. :D 
$total_paginas = Ceil($total_registros / $limite);


?>

<div class="container" role="main">
	<div class="panel panel-default">
		<div class="panel-body">

			<div class="well">Listar usuarios</div>

			<div class="page-header">
				<h2 class="text-center">Usuários cadastrados</h2>
			</div>
			
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Email</th>
						
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($atributo=mysql_fetch_array($resultado)){
				?>
						<tr>
							<td><?php echo $atributo['id']; ?></td>
							<td><?php echo $atributo['nome']; ?></td>
							<td><?php echo $atributo['email']; ?></td>
							
							<td>
								<a href="?tipo=usuario&acao=novo&id=<?php echo $atributo['id']; ?>" type="button" onclick="alert('Deseja editar?');" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="excluirusuario.php?id=<?php echo $atributo['id']; ?>" type="button" onclick="alert('Deseja editar?');" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
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
								echo "<li><a href=\"?tipo=usuario&acao=listar&pag=".$i."\">".$i."</a></li>";
							}
						}
					?>
				</ul>
			</div>
			
		</div>
		
		<div class="panel-footer">Panel footer</div>
		
	</div>
	
</div><!-- /container -->