<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" href="../css/cad.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body{
        background-color: #1c1b1bff;
    }
</style>
<body>
    <div class="container" id="corpo1">
        <div class="row">
            <?php

            include "conexao.php";
            $id = $_POST["id"] ?? null;
            $nome = $_POST["nome"] ?? null;
            
            if(!$id){
                mensagem("ID não recebido. Exclusão cancelada.", "danger");
                echo '<a href="cad.php" class="btn btn-success> Voltar </a>"';
                exit;
            }
            $sql = "DELETE FROM `pessoas` WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome excluido com sucesso!", 'success');
            } else {
                mensagem("Não foi possível excluir $nome, tente novamente.", 'danger');
            }
            ?>
            
            <a href="pesquisa.php" class="btn btn-success">Voltar</a>
        </div>

    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>