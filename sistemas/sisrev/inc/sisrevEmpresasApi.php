<?php

//AQUIVO LOCALIZADO NO 214 - BASE HOMOLOGAÇÃO

require_once('../config/query.php');

$arraySisrev = array();

$execSisrev = $conn->query($editarTabela);

while (($row = $execSisrev->fetch_assoc()) != false) {
    $arraySisrev['empresasSirev'][] = array(
        "ID" => $row['id'],
        "ID_EMPRESA" => $row['ID_EMPRESA'],
        "NOME_EMPRESA" => $row['NOME_EMPRESA'],
        "SISTEMA" => $row['SISTEMA'],
        "UF_GESTAO" => $row['UF_GESTAO'],
        "CONSORCIO" => $row['CONSORCIO'],
        "APROVADOR_CAIXA" => $row['APROVADOR_CAIXA'],
        "NUMERO_CAIXA" => $row['NUMERO_CAIXA'],
        "FILIAL_SENIOR" => $row['FILIAL_SENIOR'],
        "EMPRESA_SENIOR" => $row['EMPRESA_SENIOR'],
        "ORGANOGRAMA_SENIOR" => $row['ORGANOGRAMA_SENIOR'],
        "EMPRESA_NBS" => $row['EMPRESA_NBS'],
        "REVENDA_APOLLO" => $row['REVENDA_APOLLO'],
        "EMPRESA_APOLLO" => $row['EMPRESA_APOLLO'],
        "SITUACAO" => $row['SITUACAO']
    );       
}

$apiSisrev = json_encode($arraySisrev);

echo $apiSisrev;
