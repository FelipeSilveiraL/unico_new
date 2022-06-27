<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Etiqueta Laser</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=<?= $_GET['pg'] ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="pecas.php?pg=<?= $_GET['pg'] ?>">Peças</a></li>
        <li class="breadcrumb-item">Etiqueta Laser</li>
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
          <div class="card-body">
            <br>
            <!-- Vertical Form -->
            <form class="row g-3">
              <div class="col-3">
                <label for="inputNanme4" class="form-label">Rev Empresa</label>
                <input type="text" class="form-control" id="inputNanme4">
              </div>
              <div class="col-3">
                <label for="inputEmail4" class="form-label">Nº Nota</label>
                <input type="text" class="form-control" id="inputEmail4">
              </div>
              <div class="col-3">
                <label for="inputPassword4" class="form-label">Caixa</label>
                <input type="text" class="form-control" id="inputPassword4">
              </div>
              <div class="col-3">
                <label for="inputAddress" class="form-label">Data</label>
                <input type="date" class="form-control" id="inputAddress" placeholder="234 Main St">
              </div>

              <section class="section">
                <div class="row">
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col" class="capitalize">DATA NF</th>
                        <th scope="col" class="capitalize">Nº NF</th>
                        <th scope="col" class="capitalize">PRODUTO</th>
                        <th scope="col" class="capitalize">CAIXA</th>
                        <th scope="col" class="capitalize">QTDE</th>
                        <th scope="col" class="capitalize">TOT ITEM</th>
                        <th scope="col" class="capitalize">VAL IPI</th>
                        <th scope="col" class="capitalize">SEQ</th>
                        <th scope="col" class="capitalize">FORNEC</th>
                      </tr>
                    </thead>
                    
                  </table>
                  <!-- End Table with stripped rows -->
                </div>
              </section><!-- Vertical Form -->

              <div class="text-center py-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form>
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