<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Politicamente Exposto</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="informatica.php">Informática</a></li>
        <li class="breadcrumb-item">Politicamente exposto</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Carregar arquivo</h5>
            <!-- General Form Elements -->
            <div class="header d-flex align-items-center header-scrolled">
              <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="post" action="../inc/politicamente_exposto.php?pg=<? $_GET['pg'] ?>&tela=<?= $_GET['tela'] ?>" enctype="multipart/form-data">
                  <input type="file" name="arquivo" placeholder="Insira Documento" required>
                  <button type="submit" title="Enviar" class="btn btn-success" onclick="teste()"><i class="bi bi-send"></i></button>
                </form>
              </div>
            </div>            
            <h6><code>Tipo de arquivo permitido[.csv]</code></h6>
            <!-- End General Form Elements -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Log de execução - Ultima vez</h5>
            <!-- List group with active and disabled items -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><code>Autor:</code> <?= $logPE['nome'] ?></li>
              <li class="list-group-item"><code>Data:</code> <?= empty($logPE['data']) ? ' ' : date('d/m/Y H:i:s', strtotime($logPE['data'])) ?></li>
              <li class="list-group-item"><code>Arquivo:</code> <a href="../<?= substr($logPE['caminho'], 36) ?>" target="_blank" rel="file CSV"><?= $logPE['nome_arquivo'] ?></a></li>
            </ul><!-- End Clean list group -->

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12" style="display: none" id="carregamento">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Aguarde, estamos lendo o arquivo</h5>

          <!-- Progress Bars with Striped Backgrounds-->
          <div class="progress mt-3">
            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated pe" id="barracarregamento" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->

<script>
  function teste() {
    var display = document.getElementById("carregamento").style.display

    if (display == 'none') {
      document.getElementById("carregamento").style.display = "block";
    }

    var btnprocess = new object();

    btnprocess.porcentagemAcresentado = 5


    var porcentagem = document.getElementById("barracarregamento").style.width

    if (porcentagem = 95) {

      setTimeout(document.getElementById('carregamento', 25000))

    } else {

      setTimeout(document.getElementById('carregamento', 500))

      document.getElementById("barracarregamento").style.width.btnprocess.porcentagemAcresentado

      btnprocess.porcentagemAcresentado += 5
    }

  }
</script>

<?php
require_once('footer.php'); //Javascript e configurações afins
?>