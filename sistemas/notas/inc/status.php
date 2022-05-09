<?php
require_once('../config/query.php');

switch ($_GET['status']) {
    case '1'://AGUARDANDO LANÇAMENTO
        $query = "";
        break;
    
    case '2'://PENDENTE
        # code...
        break;

    case '3'://LANÇADO
        # code...
        break;

    default://PENDENTE
        # code...
        break;
}
