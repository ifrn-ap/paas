		<div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="gerenciamento.php">PASS</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="gerenciamento.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						
						<li><a href="#contact">Contact</a></li>
						<?php if($_SESSION['email']=='bruno@email.com'){//Diferenciar o nível de usuario?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=usuario&acao=novo">Novo</a></li>
								<li><a href="?tipo=usuario&acao=listar">Listar</a></li>
								<li class="divider"></li>
						
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Horários<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=horario&acao=novo">CadastroHorário</a></li>
								<li><a href="?tipo=horario&acao=listar">ListarHorários</a></li>
								<li class="divider"></li>
								
							</ul>
						</li>
						
						
						<?php } ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Agendamento <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=ficha&acao=nova">Novo agendamento</a></li>
								<li><a href="?tipo=ficha&acao=listar">Consultas solicitadas</a></li>
								<li class="divider"></li>
								
							</ul>
						</li>
						<li><a href="index.php">Sair <span class="glyphicon glyphicon-off"></span></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>