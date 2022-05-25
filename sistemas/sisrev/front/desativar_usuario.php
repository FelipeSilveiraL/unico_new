<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Desativar Usuários</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="informatica.php">Informática</a></li>
        <li class="breadcrumb-item">Desativar Usuários</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Busca usuários</h5>
            <!-- General Form Elements -->
            <div class="header d-flex align-items-center header-scrolled">
              <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                  <input type="text" name="query" placeholder="Insira cpf" title="Enter search keyword" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14">
                  <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
              </div>
            </div>
            <!-- End General Form Elements -->
          </div>
        </div>
      </div>

      <div class="col-lg-12" style="display: <?= empty($_GET['saida']) ? 'none' : 'block'; ?>">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Listagem de sistemas do usuário
              <a href="#" class="btn btn-sm btn-success button-rigth-card-active" title="Ativar em todos os sistemas"><i class="bi bi-check-square"></i></a>
              <a href="#" class="btn btn-sm btn-danger button-rigth-card-demiss" title="Desativar em todos os sistemas"><i class="bi bi-trash"></i></a>
            </h5>
            <!-- Small tables -->
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col" class="capitalize">#</th>
                  <th scope="col" class="capitalize">Nome</th>
                  <th scope="col" class="capitalize">Login</th>
                  <th scope="col" class="capitalize">Sistema</th>
                  <th scope="col" class="capitalize">Situação</th>
                  <th scope="col" class="capitalize">Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                  <td>
                    <a href="" title="Ativar" class="btn btn-success btn-sm"><i class="bi bi-check-square"></i></a>
                    <a href="" title="Desativar" class="btn btn-danger btn-sm">
                      <i class="bi bi-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End small tables -->
          </div>
        </div>
      </div>
    </div>
    
  </section>


</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>