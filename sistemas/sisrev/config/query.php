<?php
require_once('../../../config/databases.php');
$queryDemitidos = "SELECT DISTINCT id, nome, cpf, ativo, sistema FROM cad_usuario_api";
?>