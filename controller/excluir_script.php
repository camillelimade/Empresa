<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" href="cad.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="corpo1">
        <div class="row">
            <?php
            include "conexao.php";
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $sql = "DELETE from `pessoas` WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome excluido com sucesso!", 'success');
            } else {
                mensagem("Não foi possível excluir $nome, tente novamente.", 'danger');
            }
            ?>
            
            <a href="cad.php" class="btn btn-primary">Voltar</a>
        </div>

    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>