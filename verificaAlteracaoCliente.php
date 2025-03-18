<?php

include ("conexao.php");
include ("banco-cliente.php");



$idcliente = $_POST['txtcod'];
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$telefone = $_POST['txttelefone'];
$mensagem = $_POST['txtmensagem'];

if(alterarCliente($conexao, $nome, $email, $telefone, $mensagem, $idcliente)){
    echo "Cliente Alterado";
} else {
    $msg = mysqli_errno($conexao);
    echo $msg;
}
?>

        <br><a href="listaCliente.php" class="btn btn-custom">Voltar para Lista de Clientes</a>

