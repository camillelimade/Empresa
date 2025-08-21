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
    <div class="container" id="corpo1">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
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
                                <th scope="col">Data de Nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>@social</td>
                            </tr>
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