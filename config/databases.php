<?php
    //DATA BASE UNICO
	$servUnico = "10.100.1.66";
	$userUnico = "unico";
	$passUnico = "#CAvpnGSVP20";
	$dbnameUnico = "unico";
	$portUnico = "3306";

	//Criar a conexao
	$conn = mysqli_connect($servUnico, $userUnico, $passUnico, $dbnameUnico, $portUnico);
	
	if(!$conn){
		die("Erro no servidor '".$dbnameUnico."' : " . mysqli_connect_error());
	}
	
?>
