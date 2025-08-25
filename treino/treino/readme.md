Sexta-Feira 22/08/2025

- Com a Funcionalidade da pesquisa conectada com o banco funcionando, já começa a introduzir funcionalidades secundárias como edição e exclusão.

- Possibilidade de edição dos dados parcialmente funcional
- Uso de Variavél Oculta 


código cad.php {
    <!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cad.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="corpo1">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cad_script.php" method="POST">
                    <div class="mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form><br>
                <a href="home.php" class="btn btn-dark">Inicio</a>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
}
código cad_script{
    <!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script do Cadastro</title>
    <link rel="stylesheet" href="cad.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="corpo1">
        <div class="row">
            <?php
            include("conexao.php");
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "INSERT INTO `pessoas` ( `nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";
            if( mysqli_query($conn, $sql)){
                mensagem("$nome cadastrado com sucesso!", 'success');
            }else{
                mensagem("Não foi possível cadastrar $nome, tente novamente.", 'danger');
            }
            
            ?>
            <a href="cad.php" class="btn btn-primary">Voltar</a>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
}