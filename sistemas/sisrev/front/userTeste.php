<?php
session_start();
require_once('../config/databases.php');
require_once('../config/query.php');
require_once('administrador.php');
?>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tabelas usuários              
              <a href="usuarioNovo.php?pg=<?= $_GET['pg'] ?>&conf=<?= $_GET['conf'] ?>" class="btn btn-success button-rigth-card"><i class="bi bi-person-plus-fill"></i></a>
            </h5>
            <hr />
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Login</th>
                  <th scope="col">Depart</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $resultUsuario = $conn->query($queryUsuarios);
                while ($usuario = $resultUsuario->fetch_assoc()) {
                  echo '                    
                      <tr>
                          <th>' . $usuario['id_usuario'] . '</th>
                          <td>' . $usuario['nome_usuario'] . '</td>
                          <td>' . $usuario['usuario'] . '</td>
                          <td>' . $usuario['departamento'] . '</td>
                          <td>' . $usuario['empresa'] . '</td>
                          <td>
                            <a href="usuariosEditar.php?pg=' . $_GET['pg'] . '&conf=' . $_GET['conf'] . '&id_usuario=' . $usuario['id_usuario'] . '" title="Editar" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>';

                  if ($usuario['deletar'] == 1) {
                    echo '
                                    <a href="../inc/ativarDesativar.php?pg=' . $_GET['pg'] . '&conf=' . $_GET['conf'] . '&id_usuario=' . $usuario['id_usuario'] . '&deletar=0" title="Ativar" class="btn btn-success btn-sm">
                                      <i class="bi bi-check-square"></i>
                                    </a>';
                  } else {
                    echo '
                                    <a href="../inc/ativarDesativar.php?pg=' . $_GET['pg'] . '&conf=' . $_GET['conf'] . '&id_usuario=' . $usuario['id_usuario'] . '&deletar=1" title="Desativar" class="btn btn-danger btn-sm">
                                      <i class="bi bi-trash"></i>
                                      </a>';
                  }
                  echo '
                          </td>
                          
                      </tr>';
                }
                ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>