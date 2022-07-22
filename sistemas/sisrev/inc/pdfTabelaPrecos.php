<html>

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .img_logo {
            margin-left: 50%;
        }

        table {
            font-size: 10px;
        }
    </style>
</head>
<?php
//chamando ele pelo autoload do vendor
require '../../../vendor/autoload.php';
require_once('../config/query.php');

switch ($_GET['empresa']) {
    case '55':
        $tabela = 'sisrev_atualizacao_preco_triumph';
        $nomeEmpresa = 'Triumph';
        break;
    case '56':
        $tabela = 'sisrev_atualizacao_preco_ducati';
        $nomeEmpresa = 'Ducati';
        break;
}
?>

<body>
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <img class='img_logo' src='../../../img/sisrev.png'>
                            <h5 class="card-title">Lista de preço - <?= $nomeEmpresa ?></h5>
                            <p>Data/hora: <code><?= date('d/m/Y H:m') ?></code></p>
                            <!-- Bordered Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="capitalize">item</th>
                                        <th scope="col" class="capitalize">descrição</th>
                                        <th scope="col" class="capitalize">Valor Arquivo</th>
                                        <th scope="col" class="capitalize">Valor Apollo</th>
                                        <th scope="col" class="capitalize">Status item</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $queryListaPreco = "SELECT item, descricao, rrp as valor, status_item, rrp_apollo as valor_apollo FROM " . $tabela;
                                    $resultListaPreco = $conn->query($queryListaPreco);

                                    while ($listaPreco = $resultListaPreco->fetch_assoc()) {
                                        echo '<tr>
                                                <td>' . $listaPreco['item'] . '</td>
                                                <td>' . $listaPreco['descricao'] . '</td>
                                                <td>R$ ' . $listaPreco['valor'] . '</td>
                                                <td>R$ ' . $listaPreco['valor_apollo'] . '</td>
                                                <td>' . $listaPreco['status_item'] . '</td>
                                            </tr>';
                                    } ?>
                                </tbody>
                            </table>
                            <!-- End Bordered Table -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<?php
//close database
$conn->close();
?>