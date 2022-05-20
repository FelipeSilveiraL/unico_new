<?php
session_start();
//regras de administrador
switch ($_GET['pg']) {
    case 4:
        if($_SESSION['administrador'] == 0){
            header('location: ../front/index.php?pg=1');
            exit;
        }        
        break;
    }
?>