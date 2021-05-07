<?php


include_once 'conexao.php';
include_once 'includes/header.php';


if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);
	
	$sql= "SELECT * FROM usuarios WHERE id ='$id'";
	$resultado=mysqli_query($connect, $sql);
	$dados= mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light"> Editar Cliente</h3>
		<form action="update.php" method="POST">
			<input type="hidden" value="<?php echo $dados['id'];?>" name="id_">
			<div class="input-field col s12">
					<input  type="text" name="nome" id="text" value="<?php echo $dados['nome'];?>" >
					<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
					<input type="text" name="email" value="<?php echo $dados['email'];?>"  >
					<label for="email">Email</label>
			</div>
			<div class="input-field col s12">
					<input  name="senha" type="password" value="<?php echo $dados['senha'];?>" >
					<label for="nome">senha</label>
			</div>
				<button type="submit" name="btn-editar" class="btn"> atualizar </button>
				<a href="tabela.php"  class="btn green"> Lista de clientes</a>
				
		</form>
	
	</div>
</div>
<?php
include_once 'includes/footer.php';
?>