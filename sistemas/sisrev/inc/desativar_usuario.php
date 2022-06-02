<?php
require_once('../config/query.php');

switch ($acao) {    
    case '1'://ativar
        switch ($sistema) {
            case 'Apollo':
                $cpf = $_GET['cpf'];
                $ativo = 'S';//situação para ativação/desativação
                







                header('Location: http://10.100.1.215/');        
                

                
                break;
            
            case 'Nbs':
                $cpf = $_GET['cpf'];
                $ativo = 'S';//situação para ativação/desativação
                
                break;
        }
        break;    
    case '2'://desativar
        switch ($sistema) {
            case 'Apollo':
                $cpf = $_GET['cpf'];
                $ativo = 'N';//situação para ativação/desativação
                
                break;
            
            case 'Nbs':
                $cpf = $_GET['cpf'];
                $ativo = 'N';//situação para ativação/desativação
                
                break;
        }
        
        break;
}




?>