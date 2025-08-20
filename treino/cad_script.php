<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro com PHP - Camille</title>
    <link rel="stylesheet" href="emp.css">
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

            $sql = "INSERT INTO `pessoas` ( `nome`, `endereco`, `telefone`, `email`, `data_nasc`) VALUES ('$nome','$endereco','$telefone','$email','data_nascimento')";
            if( mysqli_query($conn, $sql)){
                echo "$nome cadastrado com sucesso!";
            }else{
                echo "$nome não foi cadastrado.";
            }
            
            ?>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>