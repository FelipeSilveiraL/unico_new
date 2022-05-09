<?php

	//CONFIG SERVIDOR
	$ipservidor = "10.100.1.66";	
	$porta = "3306";

    //DATA BASE UNICO
	$userUnico = "unico";
	$passUnico = "#CAvpnGSVP20";
	$dbnameUnico = "unico";

	//DATA BASE NOTAS
	$userNOTAS = "dbnotas";
	$passNOTAS = "#CAvpnGSVP20";
	$dbnameNOTAS = "dbnotas";

	// CRIANDO CONEXÃO DO UNICO
	$conn = new mysqli($ipservidor, $userUnico, $passUnico, $dbnameUnico, $porta);

	// Check connection
	if ($conn->connect_error) {
		die("ERRO CONEXÂO SERVIDOR NOTAS: " . $conn->connect_error);
	}

	//DOS OUTROS SITEMAS ESTA NA PASTA "SISTEMA" E EM "CONFIG" DE CADA UM.
	
?>







