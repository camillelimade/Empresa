<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar - Empresa</title>
    <link rel="stylesheet" href="cad.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php
    $pesquisa = $_POST["busca"] ?? ' ';
    // ?? é conhecido como null coalescing, retorna o primeiro operando se ele existir e não for nulo do contrário retorna o segundo.
    include "conexao.php";
    // comando necessario para buscar os dados do banco
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    // LIKE indica que a consulta seja efetuada até mesmo com uma pequena parte da variavel 
    // % indica que seja antes ou depois da variavel pesquisa, depende de onde está posicionada
    $dados = mysqli_query($conn, $sql);
    // aqui a ligação é realizada para buscar os dados do banco 
    ?>

    <div class="container" id="corpo1">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search"
                                name="busca" autofocus />
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_assoc($dados)) {
                                $cod_pessoa = $linha['cod_pessoa'];
                                $nome = $linha['nome'];
                                $endereco = $linha['endereco'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $data_nascimento = $linha['data_nascimento'];
                                $data_nascimento = mostra_data($data_nascimento);

                                echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$data_nascimento</td>
                                    <td>
                                    <div class='d-grid gap-2 d-md-flex'>
                                        <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-outline-warning'>Editar</a>
                                        <a href='' class='btn btn-outline-danger'>Excluir</a>
                                    </div>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <a href="home.php" class="btn btn-dark">Inicio</a>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>