<?php
include ("conexao.php");
include ("banco-automovel.php");

$idAutomovel = $_GET['idAutomovel'];
$automovel = buscaAutomovel($conexao, $idAutomovel);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Automóvel</title>
    
    
</head>
<body>
    <div class="form-container">
        <h1>Alterar Automóvel</h1>
        <form method="post" action="verificaAlteracaoAutomovel.php">
            <div class="form-group">
                <label for="txtcod">Código</label>
                <input type="text" class="form-control" name="txtcod" value="<?php echo $automovel['idAutomovel']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="txtnome">Nome do Automóvel</label>
                <input type="text" class="form-control" name="txtnome" value="<?php echo $automovel['nomeAutomovel']; ?>">
            </div>
            <div class="form-group">
                <label for="txtvalor">Valor</label>
                <input type="text" class="form-control" name="txtvalor" value="<?php echo $automovel['valor']; ?>">
            </div>
            <div class="form-group">
                <label for="txtqtdeLugares">Quantidade de Lugares</label>
                <input type="number" class="form-control" name="txtqtdeLugares" value="<?php echo $automovel['qtdeLugares']; ?>">
            </div>
            <div class="form-group">
                <label for="txtdataFabricacao">Data de Fabricação</label>
                <input type="date" class="form-control" name="txtdataFabricacao" value="<?php echo $automovel['dataFabricacao']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
    
   s
</body>
</html>
