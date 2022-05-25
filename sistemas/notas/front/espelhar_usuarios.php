<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login
require_once('menu.php'); //menu lateral da pagina
require_once('../inc/tabela_espelho.php');
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Usuários</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="configuracao.php?pg=<?= $_GET['pg'] ?>">Configurações</a></li>
        <?= $menu ?>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  require_once('../inc/senhaBPM.php'); //validar se possui senha cadastrada 
  ?>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista usuários</h5>
            <h6>
              <button type="button" class="btn btn-success button-rigth-espelho" data-bs-toggle="modal" data-bs-target="#basicModal" style="display: <?= !empty($_GET['idUsuario']) ? 'inline-block' : 'none' ?>;">
                <i class="bi bi-person-plus-fill"></i>
              </button><?= $texto ?>
            </h6>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" class="capitalize">id</th>
                  <th scope="col" class="capitalize">usuário</th>
                  <th scope="col" class="capitalize">e-mail</th>
                  <th scope="col" class="capitalize">cpf</th>
                  <th scope="col" class="capitalize">ação</th>
                </tr>
              </thead>
              <tbody>
                <?= $tabela ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>

      <!-- Basic Modal -->
      <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Novo espelhamento</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Qual usuário deseja espelhar ?</p>
              <form action="../inc/espelhar_usuarios.php?" method="post">
                <select name="idpai" id="idpai">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div><!-- End Basic Modal-->

    </div>
  </section>
</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>