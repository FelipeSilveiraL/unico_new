<?php

if (!empty($_GET['msn'])) {

    switch ($_GET['msn']) {
        case '1':
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Usuário removido ou desativado!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
        case '2':
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                E-mail ou senha incorretas!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
    }
}
