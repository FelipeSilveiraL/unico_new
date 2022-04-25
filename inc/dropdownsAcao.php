<?php
require_once('../config/databases.php');

switch ($_GET['acao']) {
    case '1': //EDITAR 

        switch ($_GET['drop']) {
            case '1': //EMPRESA
                $update = "UPDATE cad_empresa SET nome = '" . $_POST['nome'] . "', cnpj = '" . $_POST['cnpj'] . "' WHERE id = '" . $_GET['id_menu'] . "'";
                break;
            case '2': //DEPARTAMENTO
                $update = "UPDATE cad_depto SET nome = '" . $_POST['nome'] . "' WHERE id = '" . $_GET['id_menu'] . "'";
                break;
        }
        echo $update;
        $resultado = $conn->query($update);
        $conn->close();
        header('location: ../front/dropdownsAcao.php?pg=' . $_GET['pg'] . '&conf=' . $_GET['conf'] . '&menu=' . $_GET['menu'] . '&drop=' . $_GET['drop'] . '&id_menu=' . $_GET['id_menu'] . '&acao=' . $_GET['acao'] . '&msn=4');
        break;

    case '2': //EXCLUIR       

        switch ($_GET['drop']) {
            case '1': //EMPRESA
                $update = "UPDATE cad_empresa SET deletar = 1 WHERE id = '" . $_GET['id_menu'] . "'";
                break;
            case '2': //DEPARTAMENTO
                $update = "UPDATE cad_depto SET deletar = 1 WHERE id = '" . $_GET['id_menu'] . "'";
                break;
        }

        $resultado = $conn->query($update);
        $conn->close();
        header('location: ../front/dropdownsAcao.php?pg=' . $_GET['pg'] . '&conf=' . $_GET['conf'] . '&menu=' . $_GET['menu'] . '&drop=' . $_GET['drop'] . '&id_menu=' . $_GET['id_menu'] . '&acao=' . $_GET['acao'] . '&msn=5');
        break;
}
