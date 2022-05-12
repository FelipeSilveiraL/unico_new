<?php
session_start();

require_once('../../../config/query.php'); //Todas as pesquisas de banco
require_once('../config/query.php'); //
/* require_once('administrador.php'); */ //regra de perfis
require_once('head.php'); //CSS e configurações HTML
require_once('header.php'); //logo e login
require_once('menu.php'); //menu lateral da pagina
require_once('../inc/status.php');
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php require_once('../../../inc/mensagens.php') ?>
  <!-- Alertas -->

  <section>

    <div class="row">
      <div class="col-lg-3 py-2">
        <a href="index.php?pg=<?= $_GET['pg'] ?>&status=1" class="list-group-item-action" title="Mostrar notas com este status">
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Lançando</h4>
            <hr>
            <p class="mb-0">Quantidade: <?=$countLancando['countLancando']?></p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 py-2">
        <a href="index.php?pg=<?= $_GET['pg'] ?>&status=3" class="list-group-item-action" title="Mostrar notas com este status">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Lançadas</h4>

            <hr>
            <p class="mb-0">Quantidade: <?=$countLancado['countLancado'] ?></p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 py-2">
        <a href="index.php?pg=<?= $_GET['pg'] ?>&status=2" class="list-group-item-action" title="Mostrar notas com este status">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Pendentes</h4>

            <hr>
            <p class="mb-0">Quantidade: <?=$countPendentes['countPendentes']?></p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 py-2">
        <a href="index.php?pg=<?= $_GET['pg'] ?>&status=erro" class="list-group-item-action" title="Mostrar notas com este status">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Erros</h4>

            <hr>
            <p class="mb-0">Quantidade: <?=$countErros['countErros']?></p>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <h5 class="card-title"><?= $nomeTabela ?></h5>

            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">Empresa&emsp;</th>
                  <th scope="col">Fornecedor&emsp;</th>
                  <th scope="col">Valor&emsp;</th>
                  <th scope="col">Emissao</th>
                  <th scope="col">Vencimento&emsp;</th>
                  <th scope="col">Fluig&emsp;</th>
                  <th scope="col">Status&emsp;</th>
                  <th scope="col">Ação&emsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $color = array('bg-primary' => 1, 'bg-warning' => 2, 'bg-success' => 3);

                while ($notas = $resultado->fetch_assoc()) {
                  $value = array_search($notas['id_status'], $color);

                  echo '<tr>                          
                            <td>' . $notas['empresa'] . '</td>
                            <td>' . $notas['fornecedor'] . '</td>
                            <td>' . $notas['valor_nota'] . '</td>
                            <td>' . $notas['emissao'] . '</td>
                            <td>' . $notas['vencimento'] . '</td>
                            <td>' . $notas['numero_fluig'] . '</td>
                            <td><span class="badge ';
                  echo empty($value) ? "bg-danger" : $value;
                  echo '">' . $notas['status'] . '</span></td>
                            <td>
                              <a href="#" title="Editar" class="btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                              <a href="#" title="Desativar" class="btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                            </td>
                          </tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- End Recent Sales -->
    </div>

  </section>

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>