<?php

include ("conexao.php");
include ("banco-automovel.php");



$idAutomovel = $_POST['txtcod'];
$nomeAutomovel = $_POST['txtnome'];
$valor = $_POST['txtvalor'];
$qtdeLugares = $_POST['txtqtdeLugares'];
$dataFabricacao = $_POST['txtdataFabricacao'];

if(alterarAutomovel($conexao, $nomeAutomovel, $valor, $qtdeLugares, $dataFabricacao, $idAutomovel)){
    echo "Automóvel Alterado";
} else {
    $msg = mysqli_errno($conexao);
    echo $msg;
}
?>

        <br><a href="listaAutomovel.php" class="btn btn-custom">Voltar para Lista de Automovel</a>

