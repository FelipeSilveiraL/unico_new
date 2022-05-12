<?php
require_once('../config/query.php');

$mesAnterior = '1'; //quantidade de meses anteriores

switch ($_GET['status']) {
    case '1': //AGUARDANDO LANÇAMENTO        
        $queryNotas .= "WHERE CL.status_desc = 1 AND CL.deletar = 0 AND CL.date_create BETWEEN '".date('Y-m', strtotime('-'.$mesAnterior.' months', strtotime(date('Y-m-d'))))."-01' AND '".date('Y-m')."-31'";
        $nomeTabela = 'Notas em lançamento';
        break;

    case '2': //PENDENTE
        $queryNotas .= "WHERE CL.status_desc = 2 AND CL.deletar = 0";
        $nomeTabela = 'Notas com dados pendentes';
        break;

    case '3': //LANÇADO        
        $queryNotas .= "WHERE CL.status_desc = 3 AND CL.deletar = 0 AND CL.date_create BETWEEN '".date('Y-m', strtotime('-'.$mesAnterior.' months', strtotime(date('Y-m-d'))))."-01' AND '".date('Y-m')."-31'";
        $nomeTabela = 'Notas já lançadas';
        break;

    case 'erro': //ERRO        
        $queryNotas .= "WHERE CS.erro = 1 AND CL.deletar = 0";
        $nomeTabela = 'Notas com erro';
        break;

    default:
        $queryNotas .= "WHERE CL.deletar = 0 AND CL.date_create BETWEEN '".date('Y-m', strtotime('-'.$mesAnterior.' months', strtotime(date('Y-m-d'))))."-01' AND '".date('Y-m')."-31'";
        $nomeTabela = 'Todas as notas';
        break;
}

$resultadoUP = $connNOTAS->query($queryNotas);