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
    h1, label,text {
        color: whitesmoke;
    }
</style>
<body>
    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? ' ';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    ?>
    <div class="container" id="corpo1">
        <div class="row">
            <div class="col">
                <h1>Edição de Dados</h1>
                <br>
                <form action="edit_script.php" method="POST">
                    <div class="mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value=" <?php echo $linha['nome']; ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Endereço</label>
                        <input type="text" class="form-control" name="endereco" required value=" <?php echo $linha['endereco']; ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Email</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" required value="<?php echo $linha['data_nasc']; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value=" <?php echo $linha['cod_pessoa']; ?> ">
                        <a href="home.php" class="btn btn-dark">Inicio</a>
                    </div>
                </form><br>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>