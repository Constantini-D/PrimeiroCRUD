<?php
include_once 'conexao.php';
include_once 'includes/header.php';
?>

<div class="row">
	<h3 class="light"> Cliente</h3>
	<div class="col s12 m6 push-m3 ">
		<table class= "striped">
		<thead>
			<tr>
			<th>Nome:</th>
			<th>Email:</th>
			<th>Idade:</th>
			
			</tr>
			</thead>
		
			<tbody>
				<?php
				$sql="SELECT * FROM usuarios";
				$resultado = mysqli_query($connect,$sql);
				while($dados = mysqli_fetch_array($resultado))
                {
				?>
				<tr>
			<td><?php echo $dados['nome'];?></td>
			<td><?php echo $dados['email'];?></td>
			<td><?php echo $dados['senha'];?></td>
			<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating grey"><i class="material-icons">edit</i></a></td>
			<td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating grey modal-trigger"><i class="material-icons">delete</i></a></td>
					<div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa!</h4>
      <p>Tem certeza que deseja excluir este cliente ?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
		<form action="delete.php" method="post">
		<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
			<button type="submit" name="btn-deletar" class="btn red"> sim, quero deletar</button>
		</form>
    </div>
  </div>
				</tr>
				<?php } ?>
	 		</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar Cliente</a>
	
	</div>
</div>
<?php
include_once 'includes/footer.php';
?>