<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../CSS/cad.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<style>
    body {
        text-align: center;
        background-color: #1c1b1bff;
    }

    #corpo1 {
        height: 500px;
        width: 500px;
        padding-top: 55px;
    }

    h1,
    p,
    hr,
    label {
        color: whitesmoke;
    }

    .nav-item {
        border: solid 0.5px #fff;
        border-radius: 10px;
        margin: 6px;
    }

    label {
        text-align: left;
    }

    #tit {
        text-align: left;
    }

    form,
    label {
        text-align: left;
    }

    #butEnviar {
        text-align: center;justify-content: center; 
        padding-top: 13px;
    }
</style>

<body>
    <div class="modal-body" id="abrirCadastro" data-bs-target="#cadastroModal"
        style="background-color: #181616ff; border-radius: 10px;">
        <div class="row">
            <div class="col">
                <h1 id="tit">Cadastro</h1>
                <form action="cad_script.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Endereço</label>
                        <input type="text" class="form-control" name="endereco" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    </div>
                    <div id="butEnviar">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form><br>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>