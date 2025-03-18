<?php

include("conexao.php");
include("banco-cliente.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lista de Clientes</title>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Lista de Clientes</h1>
			<a href="../../inicio.html" class="btn btn-custom">Cadastrar Novo Cliente</a>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Mensagem</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$clientes = listarCliente($conexao);
					foreach ($clientes as $cliente):
					?>
					<tr>
						<td><?php echo $cliente['idcliente'] ?></td>
						<td><?php echo $cliente['nome'] ?></td>
						<td><?php echo $cliente['email'] ?></td>
						<td><?php echo $cliente['telefone'] ?></td>
						<td><?php echo $cliente['mensagem'] ?></td>
						<td><a href="excluirCliente.php?idcliente=<?php echo $cliente['idcliente'] ?>">Excluir</a></td>
						<td><a href="alterar-cliente.php?idcliente=<?php echo $cliente['idcliente'] ?>">Alterar</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
