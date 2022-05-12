<?php
session_start();

require_once('../../../config/query.php'); //Todas as pesquisas de banco
require_once('../config/query.php');//
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
        <li class="breadcrumb-item"><a href="../index.php?pg=1">Dashboard</a></li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php require_once('../../../inc/mensagens.php') ?>
  <!-- Alertas -->

  <section>

    <div class="row">
      <div class="col-lg-3 py-2">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Lançando</h4>
          <hr>
          <p class="mb-0">Quantidade: 12</p>
        </div>
      </div>
      <div class="col-lg-3 py-2">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Lançadas</h4>

          <hr>
          <p class="mb-0">Quantidade: 70</p>
        </div>
      </div>
      <div class="col-lg-3 py-2">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Pendentes</h4>

          <hr>
          <p class="mb-0">Quantidade: 70</p>
        </div>
      </div>
      <div class="col-lg-3 py-2">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Erros</h4>

          <hr>
          <p class="mb-0">Quantidade: 70</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $nomeTabela ?></h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Empresa&emsp;</th>
                  <th scope="col">Fornecedor&emsp;</th>
                  <th scope="col">Valor&emsp;</th>
                  <th scope="col">Emissão&emsp;</th>
                  <th scope="col">Vencimento&emsp;</th>
                  <th scope="col">Fluig&emsp;</th>
                  <th scope="col">Status&emsp;</th>
                  <th scope="col">Ação&emsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php              
                  $color = array(1=>'bg-primary',2=>'bg-warning', 3=>'success'); 

                  while($notas = $resultadoUP->fetch_assoc()){

                    $key = in_array($notas['status'], $color);

                    echo '<tr>
                            <td>'.$notas['empresa'].'</td>
                            <td>'.$notas['fornecedor'].'</td>
                            <td>'.$notas['valor_nota'].'</td>
                            <td>'.$notas['emissao'].'</td>
                            <td>'.$notas['vencimento'].'</td>
                            <td>'.$notas['numero_fluig'].'</td>
                            <td class="badge '.$key.'">'.$notas['status'].'</td>
                            <td></td>
                          </tr>';
                  }
                ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>

  </section>

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>