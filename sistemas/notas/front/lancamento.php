<?php
require_once('../../../config/query.php'); //Todas as pesquisas de banco
require_once('../config/query.php'); //
/* require_once('administrador.php'); */ //regra de perfis
require_once('head.php'); //CSS e configurações HTML
require_once('header.php'); //logo e login
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Lançamento Manual</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php?pg=1">Home</a></li>
        <li class="breadcrumb-item">Lançamento manual</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php require_once('../../../inc/mensagens.php') ?>
  <!-- Alertas -->


  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

            <!-- No Labels Form -->
            <form class="row g-3">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-6">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="Address">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="City">
              </div>
              <div class="col-md-4">
                <select id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Zip">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End No Labels Form -->

          </div>
        </div>
      </div>
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

            <!-- No Labels Form -->
            <form class="row g-3">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-6">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="Address">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="City">
              </div>
              <div class="col-md-4">
                <select id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Zip">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End No Labels Form -->

          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>