<?php
  require_once('head.php'); //CSS e configurações HTML e session start
  require_once('header.php'); //logo e login e banco de dados
  require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Informática</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Informática</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>

  <section class="section">
    <div class="row">
      <div class="col-lg-6"> 
        <a href="desativar_usuario.php?pg=<?= $_GET['pg'] ?>&tela=<?= $_GET['tela'] ?>" class="list-group-item list-group-item-action">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Desativar Usuários</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6"> 
        <a href="empresas.php?pg=<?= $_GET['pg'] ?>&tela=2" class="list-group-item list-group-item-action">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Empresas</h5>
            </div>
          </div>
        </a>
      </div>
    </div>    
  </section>

  <!--################# section TERMINA AQUI #################-->

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>