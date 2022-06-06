<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Nome da Pagina</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="informatica.php?pg=2">Informática</a></li>
        <li class="breadcrumb-item"><a href="empresa.php?pg=2&tela=2">Empresa</a></li>
        <li class="breadcrumb-item">Editar Regra Empresa</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>

  <!--################# COLE section AQUI #################-->
  <?php
  require_once('../inc/apiRecebeSmart.php');
  ?>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <!-- General Form Elements -->
            <form>
              <div class="row mb-3 mt-4">
                <label for="inputText" class="col-sm-2 col-form-label ">EMPRESA</label>
                <div class="col-lg-10">
                  <select type="text" class="form-control">Apollo
                    <option>Apollo</option>
                    <option>----------</option>
                    <option>APOLLO BNS</option>
                    <option>BANCO HARLEY</option>
                    <option>EMPRESA QUE NAO USA SISTEMA ERP</option>
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">SISTEMA</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      <div>



      </div>
    </div>
  </section>
  <!--################# section TERMINA AQUI #################-->

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>