<?php
require_once('head.php'); //CSS e configurações HTML e session start
require_once('header.php'); //logo e login e banco de dados
require_once('menu.php'); //menu lateral da pagina
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Empresas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?pg=<?= $_GET['pg'] ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="informatica.php?pg=<?= $_GET['pg'] ?>">Informática</a></li>
        <li class="breadcrumb-item">Empresas</li>
      </ol>
    </nav>
  </div><!-- End Navegação -->

  <?php
  require_once('../../../inc/mensagens.php'); //Alertas
  ?>

  <!--################# COLE section AQUI #################-->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <a href="novaRegraEmp.php" type="button" class="btn btn-success" style="float: right; margin-left: 8px;" title="Nova regra empresa"><i class="bx bxs-plus-square"></i></a>

            <button type="button" class="btn btn-success" style="float: right;" title="Exportar excel"><i class="ri-file-excel-2-fill"></i></button>
          </div>
          <div class="card-body">
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" class="capitalize">#</th>
                  <th scope="col" class="capitalize">EMPRESA</th>
                  <th scope="col" class="capitalize">UF</th>
                  <th scope="col" class="capitalize">SISTEMA</th>
                  <th scope="col" class="capitalize">CONSÓRCIO</th>
                  <th scope="col" class="capitalize">SITUAÇÃO</th>
                  <th scope="col" class="capitalize">AÇÃO</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once('../config/queryBpmgp.php');
                require_once('../../../config/databases.php');

                
                $conSucesso = $conn->query($queryTabela);
                $row = $conSucesso->fetch_assoc();
                while($row = $conSucesso->fetch_assoc()){
                  echo '<tr>
                  <td>'.$row["ID_EMPRESA"].'</td>
                  <td>'.$row["NOME_EMPRESA"].'</td>
                  <td>'.$row["UF_GESTAO"].'</td>
                  <td>'.$row["SISTEMA"].'</td>
                  <td>'.$row["CONSORCIO"].'</td>
                  <td>'.$row["SITUACAO"].'</td>
                  <td><a href="editEmp.php?pg=2&tela=3&ID='.$row["ID_EMPRESA"].'" title="Editar" class="btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                            
                            <a href="#" title="Desativar" class="btn-danger btn-sm"><i class="bi bi-trash"></i></a>

                            <a href="#" title="Exibir mais informações" class="btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                        </td>
                 
                  
              </tr>';
                }

                
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--################# section TERMINA AQUI #################-->

</main><!-- End #main -->

<?php
require_once('footer.php'); //Javascript e configurações afins
?>