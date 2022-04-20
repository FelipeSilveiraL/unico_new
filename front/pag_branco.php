<?php
session_start();

require_once('../config/databases.php');
require_once('../config/query.php');
require_once('administrador.php');
require_once('head.php');
require_once('header.php');
require_once('menu.php');
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Nome da Pagina</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item">Pagina Branco</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <!--COLE O SEU MAIN AQUI-->

  <h6>Seu MAIN!</h6>

  <!--SEU MAIN TERMINA AQUI-->
</main><!-- End #main -->
<?php
require_once('footer.php');
?>