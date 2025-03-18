<?php
// nome do arquivo é excluir-automovel.php
include ("conexao.php");
include ("banco-automovel.php");

$idAutomovel = $_GET['idAutomovel'];

if(excluirAutomovel($conexao, $idAutomovel)){
	// comando para redirecionar o usuário para a lista atualizada de automóveis
	header("location:listaAutomovel.php");
	
	// comando para encerrar a conexão com o banco de dados
	die();
}
?>
