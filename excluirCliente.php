<?php
// nome do arquivo é excluir-automovel.php
include ("conexao.php");
include ("banco-cliente.php");

$idcliente = $_GET['idcliente'];

if(excluirCliente($conexao, $idcliente)){
	// comando para redirecionar o usuário para a lista atualizada de cliente
	header("location:listaCliente.php");
	
	// comando para encerrar a conexão com o banco de dados
	die();
}
?>
