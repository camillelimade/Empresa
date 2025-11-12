<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script do Cadastro</title>
    <link rel="stylesheet" href="../css/cad.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

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
            $foto = $_FILES["foto"];

          
            if (isset($foto) && $foto['error'] == 0) {
                $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
                $nome_foto = date("YmdHis") . "." . $extensao;
                move_uploaded_file($foto['tmp_name'], "../img/" . $nome_foto);
            } else {
                $nome_foto = "sem_foto.jpg";
            }
           

            $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nasc`, `foto`) 
VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento', '$nome_foto')";

            if (mysqli_query($conn, $sql)) {
                echo "<img src='../img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                mensagem("$nome cadastrado com sucesso!", 'success');
            } else {
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