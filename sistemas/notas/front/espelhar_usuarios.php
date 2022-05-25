<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Usuários</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=1">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="configuracao.php?pg=<?= $_GET['pg'] ?>">Configurações</a></li>
        <li class="breadcrumb-item">Usuários</li>
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
            <h5 class="card-title">Espelhar usuários</h5>
            <h6>
              <p>Nesta tela só é permitido fazer espelhamento dentre os usuários.</p>
              <p> Caso seja necessario mudar outras informações como por exemplo; usuário, senha, etc... Basta clicar neste icone <a href="../../../front/usuarios.php?pg=2&conf=1" target="_blank" class="btn btn-info btn-sm"><i class="ri-user-settings-line"></i></a></p>
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
                <?php
                  $queryUsuarios .= " WHERE U.deletar = 0";
                  $resultadoUsuarios = $conn->query($queryUsuarios);
                  while($usuarios = $resultadoUsuarios->fetch_assoc()){
                    echo '<tr>
                            <th scope="row">'.$usuarios['id_usuario'].'</th>
                            <td>'.$usuarios['nome_usuario'].'</td>
                            <td>'.$usuarios['email'].'</td>
                            <td>'.$usuarios['cpf'].'</td>
                            <td>
                              <a href="#" title="Configurações" class="btn btn-primary btn-sm"><i class="ri-user-settings-line"></i></a>
                            </td>
                          </tr>';
                  }?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>