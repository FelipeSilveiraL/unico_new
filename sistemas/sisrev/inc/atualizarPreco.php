<?php
session_start();
require '../../../vendor/autoload.php'; //autoload da biblioteca
require_once('../config/query.php');

$extXLSX = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";

if ($_POST['empresa'] == 1 || $_POST['empresa'] == 2) {
    //diretórios
    $triumph = "/var/www/html/unico/sistemas/sisrev/documentos/AP/triumph/";
    $ducati = "/var/www/html/unico/sistemas/sisrev/documentos/AP/ducati/";

    if ($_FILES['arquivo']["type"] === $extXLSX) {
        //SUBINDO O ARQUIVO NO SERVIDOR
        $nome = date('dmYhi') . $_FILES['arquivo']['name'];

        $uploaddir = $_POST['empresa'] == 2 ? $triumph : $ducati;
        $uploadfile = $uploaddir . basename($nome);


        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
            //log da carga
            $insertLog = "INSERT INTO sisrev_arquivo_ap (caminho,nome_arquivo,data,id_usuario,id_empresa) VALUES ('" . $uploadfile . "', '" . $_FILES['arquivo']['name'] . "','" . date('Y-m-d H:i:s') . "','" . $_SESSION['id_usuario'] . "','" . $_POST['empresa'] . "')";
            $result = $conn->query($insertLog);

            



        } else {
            header('location: ../front/atualizarPreco.php?pg=' . $_GET['pg'] . '&msn=10&erro=2'); //não foi possivel salvar o arquivo
        }
    } else {
        header('location: ../front/atualizarPreco.php?pg=' . $_GET['pg'] . '&msn=10&erro=3'); //extensão do arquivo é invalida
    }
} else {
}




















switch ($_POST['']) {
    case '1':

        break;
    case '2':
        if ($_FILES['arquivo']["type"] === $extXLSX) {

            //SUBINDO O ARQUIVO NO SERVIDOR

            $nome = date('dmYhi') . $_FILES['arquivo']['name'];

            $uploaddir = '/var/www/html/unico/sistemas/sisrev/documentos/AP/triumph/';
            $uploadfile = $uploaddir . basename($nome);


            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
                echo 'arquivo enviado com sucesso!';
            }
        } else {
            header('location: ../front/atualizarPreco.php?pg=' . $_GET['pg'] . '&msn=10&erro=3');
        }
        break;
}


//SUBIBDO O ARQUIVO