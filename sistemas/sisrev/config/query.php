<?php
require_once('../../../config/databases.php');

$queryDemitidos = "SELECT DISTINCT id, nome, cpf, ativo, sistema FROM cad_usuario_api";


$droptablePE = "DROP TABLE sisrev_politicamente_exposto";

// PE - Politicamente Exposto
$createtablePE = "CREATE TABLE `sisrev_politicamente_exposto` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `CPF_PEP` VARCHAR(11) NULL,
    `Nome_PEP` VARCHAR(255) NULL,
    `Sigla_Funcao_PEP` VARCHAR(10) NULL,
    `Descricao_Funcao_PEP` VARCHAR(255) NULL,
    `Nivel_Funcao_PEP` VARCHAR(10) NULL,
    `Nome_Orgao_PEP` VARCHAR(255) NULL,
    `Dt_Inicio_Exercicio` VARCHAR(10) NULL,
    `Dt_Fim_Exercicio` VARCHAR(10) NULL,
    `Dt_Final_Carencia` VARCHAR(10) NULL,
    `ATUALIZACAO` VARCHAR(10) NULL,
    PRIMARY KEY (`id`));";

$queryLogPE = "SELECT 
SAPE.caminho, SAPE.data, SAPE.nome_arquivo, U.nome
FROM
sisrev_arquivo_PE SAPE
LEFT JOIN usuarios U ON (SAPE.id_usuario = U.id_usuario)
ORDER BY SAPE.id DESC
LIMIT 1;";
$resultLogPE = $conn->query($queryLogPE);
$logPE = $resultLogPE->fetch_assoc();


$queryTabela = "SELECT * FROM `sisrev_empresas_bpmgp` where ID_EMPRESA NOT IN(302,208,261) ORDER BY id ASC;";

$consorcio = ($row["CONSORCIO"] == 'S') ? 'SIM' : 'NÃO';

$situacao = ($row["SITUACAO"] == 'A') ? 'ATIVO' : 'DESATIVADO';

$valueApollo = ($row["EMPRESA_APOLLO"] == 0) ? '' : $row["EMPRESA_APOLLO"];

$valueRevApollo = ($row["REVENDA_APOLO"] == 0) ? '' : $row["REVENDA_APOLO"];

$valueEmpNbs = ($row["EMPRESA_NBS"] == 0) ? '' : $row["EMPRESA_NBS"];

$editarTabela = "SELECT * FROM `sisrev_empresas_bpmgp` ";

$queryModulos = "SELECT * FROM sisrev_modulos";