<?php

include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light"> Novo Cliente</h3>
		<form action="create.php" method="POST">
			<div class="input-field col s12">
					<input  type="text" name="nome" type="text" >
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="email" type="e-mail" >
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input  name="senha" type="password" >
					<label for="nome">senha</label>
				</div>
				<button type"submit" name="btn-cadastrar" class="btn"> Cadastrar</button>
				<a href="tabela.php"  class="btn green"> Lista de clientes</a>
				
		</form>
	
	</div>
</div>
<?php
include_once 'includes/footer.php';
?>