<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Regra Empresa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="informatica.php?pg=<?= $_GET['pg'] ?>">Informática</a></li>
        <li class="breadcrumb-item"><a href="empresas.php?pg=<?= $_GET['pg'] ?>&tela=<?= $_GET['tela'] ?>">Empresa</a></li>
        <li class="breadcrumb-item">Editar Regra Empresa</li>
      </ol>
    </nav>
  </div>
  
  <?php
  require_once('../../../inc/mensagens.php');
  ?>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            <?php
              require '../inc/editemp.php';
            ?>
            </form>
          </div>
        </div><!-- FIM card -->
      </div><!-- FIM col-lg-12 -->
    </div>
  </section>
</main>

            <?php
            require_once('footer.php'); //Javascript e configurações afins
            ?>
<!-- FIM section -->
<!--################# section TERMINA AQUI #################-->