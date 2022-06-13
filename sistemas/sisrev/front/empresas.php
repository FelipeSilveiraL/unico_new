<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
require_once('../inc/apiRecebeTabela.php');
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Empresas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=<?= $_GET['pg'] ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="informatica.php?pg=<?= $_GET['pg'] ?>">Informática</a></li>
        <li class="breadcrumb-item">Empresas</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>

  <!--################# COLE section AQUI #################-->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <a href="novaRegraEmp.php?pg=<?= $_GET['pg'] ?>&tela=<?= $_GET['tela'] ?>" type="button" class="btn btn-success" style="float: right; margin-left: 8px;" title="Nova regra empresa"><i class="bx bxs-file-plus"></i></a>

            <a href="../bd/relatorioExcel.php" type="button" class="btn btn-success" style="float: right;" title="Exportar excel"><i class="ri-file-excel-2-fill"></i></A>
          </div>
          <div class="card-body">
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" class="capitalize">#</th>
                  <th scope="col" class="capitalize">EMPRESA</th>
                  <th scope="col" class="capitalize">UF</th>
                  <th scope="col" class="capitalize">SISTEMA</th>
                  <th scope="col" class="capitalize">CONSÓRCIO</th>
                  <th scope="col" class="capitalize">SITUAÇÃO</th>
                  <th scope="col" class="capitalize">AÇÃO</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once('../inc/inserindoTabela.php');
                ?>
              </tbody>
            </table>
            <div class="modal fade" id="idempresa1" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">'.$row["NOME_EMPRESA"].'</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="capitalize">#</th>
                          <th scope="col" class="capitalize">Name</th>
                          <th scope="col" class="capitalize">Position</th>
                          <th scope="col" class="capitalize">Age</th>
                          <th scope="col" class="capitalize">Start Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Brandon Jacob</td>
                          <td>Designer</td>
                          <td>28</td>
                          <td>2016-05-25</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Bridie Kessler</td>
                          <td>Developer</td>
                          <td>35</td>
                          <td>2014-12-05</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashleigh Langosh</td>
                          <td>Finance</td>
                          <td>45</td>
                          <td>2011-08-12</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Angus Grady</td>
                          <td>HR</td>
                          <td>34</td>
                          <td>2012-06-11</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Raheem Lehner</td>
                          <td>Dynamic Division Officer</td>
                          <td>47</td>
                          <td>2011-04-19</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--################# section TERMINA AQUI #################-->

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>