<?php
require_once('../config/query.php');

switch ($_GET['acao']) {
    case '1': //ADIÇÃO
        $queryEspelho = "INSERT INTO cad_espelho (id_usuariopai, id_usuariofilho) VALUES ('".$_GET['idUsuarioadicionar']."', '".$_GET['idUsuario']."')";
        $msn = '8';
        break;

    case '2': //EXCLUZÃO
        $queryEspelho = "DELETE FROM cad_espelho WHERE id_usuariofilho = '".$_GET['idUsuario']."' AND id_usuariopai = '".$_GET['idUsuarioremover']."'";
        $msn = '1';
        break;
}

if(!$result = $connNOTAS->query($queryEspelho)){
    "Erro[1]: Contate o administrador";
}else{
    echo '<script>window.location.href = "../front/espelhar_usuarios.php?pg='.$_GET['pg'].'&tela='.$_GET['tela'].'&idUsuario='.$_GET['idUsuario'].'&msn='.$msn.'";</script>';
}