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
            <button type="button" class="btn btn-success" style="float: right; margin-left: 8px;" title="Nova regra empresa"><i class="bx bxs-plus-square"></i></button>
            
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
            //       while (($rowemp = oci_fetch_assoc($resultemp)) != FAlSE) {
        
            //         $consorcio = ($rowemp['CONSORCIO'] == 'S') ? 'SIM' : 'NÃO';
            //         $situacao = ($rowemp['SITUACAO'] == 'A') ? 'ATIVO' : 'DESATIVADO';
        
            //         echo '<tr>';
            //         echo '<td>' . $rowemp['ID_EMPRESA'] . '</td>';
            //         echo '<td>' . $rowemp['NOME_EMPRESA'] . '</td>';
            //         echo '<td>' . $rowemp['UF_GESTAO'] . '</td>';
            //         echo '<td>' . $empresa . '</td>';
            //         echo '<td>' . $consorcio . '</td>';
            //         echo '<td>' . $situacao . '</td>';
            //         echo '<td><a href="editemp.php?id_empresa=' . $rowemp['ID_EMPRESA'] . '&id_usuario=' . $_SESSION['id_usuario'] . '" class="text-success menu rigtIcones">
            //         <i class="fas fa-pen" style="margin-left: 1px;"></i>
            //     </a>
            //     <a href="deletarEmp.php?id=' . $rowemp['ID_EMPRESA'] . '&id_usuario=' . $_SESSION['id_usuario'] . '" class="text-danger rigtIcones" title="Excluir">
            //         <i class="fas fa-trash"></i>
            //     </a>           
            // </td>
            //         echo '</tr>' ; }
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