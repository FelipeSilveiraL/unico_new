<?php

if (!empty($_GET['msn'])) {

    switch ($_GET['msn']) {
        case '1':
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span style="font-size: 12px">Usuário removido ou desativado!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
        case '2':
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <span style="font-size: 12px"> E-mail ou senha incorretas!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
        case '3':
            echo '
                <script>
                    alert("Perfil Editado com sucesso, deslogue e logue novamente no sistema!");
                </script>';
            break;
        case '4':
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span style="font-size: 12px">Editado com sucesso!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
        case '5':
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span style="font-size: 12px">Desativado com sucesso!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            break;
        case '6':
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span style="font-size: 12px">Ativado com sucesso!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            break;
        case '7':
            echo '
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <span style="font-size: 12px">Senha alterada, agora logue para confirmar!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            break;
        case '8':
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span style="font-size: 12px">Adicionado / Criado com sucesso!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            break;
        case '9':
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <span style="font-size: 12px"> Não foi possivel logar. Erro session_start!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            break;
        case '10':
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span style="font-size: 12px"> Tipo de arquivo não permitido!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            break;
    }
}
