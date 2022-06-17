<?php 

$data = $_POST['dataPesquisa'];    // recebe data
$data = implode('', array_reverse(explode('-', $data))); //transformar a data para a verificação da pasta

$Dir = "../documentos/CAR/".$data.""; // salva destino na variavel

//verifica se existe diretorio com a $data 
// if (is_dir($Dir)) {
//     $status = '1';
// } else {
//     $status = '0';
// }

//retira o ano para verificação de arquivo
$fileName = rtrim($data,'2022');

//salva caminho do arquivo para verificação
$las = "$Dir/las$fileName.txt";
$lyf = "$Dir/lyf$fileName.txt";
$luc = "$Dir/luc$fileName.txt";
$lmc = "$Dir/lmc$fileName.txt";
$lgf = "$Dir/lgf$fileName.txt";
$lb3 = "$Dir/lb3$fileName.txt"; 
$l50 = "$Dir/l50$fileName.txt";
$l0s = "$Dir/l0s$fileName.txt";



//verifica se existe arquivo na pasta $Dir
// if (file_exists($las)) {
//     $status1 = '1';
// } else {
//     $status1 = '0';
// }

// echo $status1;


// echo $status1; <-- para teste, descomente

header('../front/processoFabrica.php');

?>
