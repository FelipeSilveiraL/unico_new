<?php
session_start();
echo !empty($_GET['conf']) ? '' : '<script>window.location.href = "usuarios.php?pg='.$_GET['pg'].'&conf=1";</script>';
require_once('../config/databases.php');
require_once('../config/query.php');
require_once('administrador.php');
require_once('head.php');
require_once('header.php');
require_once('menu.php');
?>

<main id="main" class="main">
  
  <?php require_once('../inc/mensagens.php') ?>  <!-- Alertas -->

  <iframe src="iframeUsuarios.php" style="height:1800px; width:100%;" title="Iframe Usuarios"></iframe>

</main><!-- End #main -->

<?php
require_once('footer.php');
?>