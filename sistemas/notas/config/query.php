<?php
require_once('databases.php'); //banco de dados

$queryNotas = "SELECT 
CL.valor_nota,
CL.emissao,
CL.vencimento,
CL.numero_fluig,
F.nome_fornecedor fornecedor,
CF.nome empresa,
CS.nome status
FROM
cad_lancarnotas AS CL
LEFT JOIN
cad_fornecedor F ON (CL.cnpj = F.CPF_CNPJ)
LEFT JOIN 
cad_filial CF ON (CL.id_filial = CF.ID_FILIAL)
LEFT JOIN
cad_status CS ON (CL.status_desc = CS.ID_STATUS) ";



?>
