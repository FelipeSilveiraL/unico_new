<?php
	require_once('../../../config/databases.php');
		
	// CRIANDO CONEXÃO DO NOTAS
	$connNOTAS = new mysqli($ipservidor, $userNOTAS, $passNOTAS, $dbnameNOTAS, $porta);

	// Check connection
	if ($connNOTAS->connect_error) {
		die("ERRO CONEXÂO SERVIDOR NOTAS: " . $connNOTAS->connect_error);
	}
?>