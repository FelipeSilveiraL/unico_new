<?php
  require_once('administrador.php');//regra de perfis
  require_once('../../../config/query.php'); //Todas as pesquisas de banco
  require_once('../config/query.php');  
  require_once('head.php');//CSS e configurações HTML
  require_once('header.php');//logo e login
  require_once('menu.php');//menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Nome da Pagina</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
        <li class="breadcrumb-item">Pagina Branco</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->
  
  <?php 
  require_once('../../../inc/mensagens.php');//Alertas
  require_once('../inc/senhaBPM.php'); //validar se possui senha cadastrada 
  ?>

  <!--################# COLE section AQUI #################-->

  <h6>Inicio da section!</h6>

  <!--################# section TERMINA AQUI #################-->

</main><!-- End #main -->

<?php
  require_once('footer.php');//Javascript e configurações afins
?>