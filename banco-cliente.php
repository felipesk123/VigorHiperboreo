<?php
function inserirAutomovel($conexao, $nome, $email, $telefone, $mensagem){
	$sql = "INSERT INTO cliente (nome, email, telefone, mensagem)	
            VALUES ('$nome', '$email', '$telefone', '$mensagem')";                                  
	
	return mysqli_query($conexao, $sql);
} 

function alterarCliente($conexao, $nome, $email, $telefone, $mensagem, $idcliente){
	$sql = "UPDATE cliente SET nome = '$nome', "
	     . "email = '$email', "
	     . "telefone= '$telefone', "
	     . "mensagem = '$mensagem' "
	     . "WHERE idcliente = $idcliente";
	return mysqli_query($conexao, $sql);
} 

function excluirCliente($conexao, $idcliente){
	$sql = "DELETE FROM cliente WHERE idcliente = $idcliente";
	return mysqli_query($conexao, $sql);
} 

function listarCliente($conexao) {
	$clientes= array();
	$sql = "SELECT * FROM cliente";
	$resultado = mysqli_query($conexao, $sql);
	
	while ($cliente = mysqli_fetch_assoc($resultado)){
		array_push($clientes, $cliente);
	}
	return $clientes;
}


function buscaCliente($conexao, $idcliente){
	$sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
	$resultado = mysqli_query($conexao, $sql);
	return mysqli_fetch_assoc($resultado);
}
?>
