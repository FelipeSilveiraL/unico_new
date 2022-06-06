<?php

$url = "http://10.100.1.215/smartshare/inc/smartApi.php";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$resultado = json_decode(curl_exec($ch));

foreach ($resultado->empresaSmart as $empSmart) {

    switch ($empSmart->SISTEMA) {
        case "A":
            $sistema = "APOLLO";
            break;
        case "N":
            $sistema = "BANCO NBS";
            break;
        case "H":
            $sistema = "BANCO HARLEY";
            break;
        case " ":
            $sistema = "EMPRESA QUE NÃO USA SISTEMA ERP";
            break;
        case "0":
            $sistema = "EMPRESA QUE NÃO USA SISTEMA ERP";
            break;
    }

$consorcio = ($empSmart->CONSORCIO == 'S') ? 'SIM' : 'NÃO';

$situacao = ($empSmart->SITUACAO == 'A') ? 'ATIVO' : 'DESATIVADO';

$valueApollo = ($rowemp['EMPRESA_APOLLO'] == 0) ? '' : $rowemp['EMPRESA_APOLLO'];

$valueRevApollo = ($rowemp['REVENDA_APOLLO'] == 0) ? '' : $rowemp['REVENDA_APOLLO'];

$valueEmpNbs = ($rowemp['EMPRESA_NBS'] == 0) ? '' : $rowemp['EMPRESA_NBS'];

    $tabela .= '
                <tr>
                    <td>'.$empSmart->ID.'</td>
                    <td>'.$empSmart->EMPRESA.'</td>
                    <td>'.$empSmart->UF.'</td>
                    <td>'.$sistema.'</td>
                    <td>'.$consorcio.'</td>
                    <td>'.$situacao.'</td>
                    <td><a href="editEmp.php?ID='.$empSmart->ID.'&pg=2&tela=3"><button type="button" class="btn btn-outline-warning btn-sm"  title="Editar"><i class="bi bi-pencil-fill"></i></button></a>
                        
                        <button type="button" class="btn btn-outline-danger btn-sm"  title="Excluir"><i class="bi bi-trash-fill"></i></button>

                        <button type="button" class="btn btn-outline-info btn-sm" title="Vericar outras informações"><i class="bi bi-eye-fill"></i></button>
                    </td>
                </tr>';
}
