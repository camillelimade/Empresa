<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" href="../css/cad.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" id="corpo1">
        <div class="row">
            <?php
            include "conexao.php";
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];

            // $sql = "INSERT INTO `pessoas` ( `nome`, `endereco`, `telefone`, `email`, `data_nasc`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";
            $sql =
                "UPDATE `pessoas` set 
            `nome` = '$nome', 
            `endereco` = '$endereco', 
            `telefone` = '$telefone', 
            `email` = '$email',
            `data_nasc` = '$data_nasc'
            WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome alterado com sucesso!", 'success');
            } else {
                mensagem("Não foi possível alterar $nome, tente novamente.", 'danger');
            }

            ?>
            <a href="home.php" class="btn btn-primary">Voltar</a>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>