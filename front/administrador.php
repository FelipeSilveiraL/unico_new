<?php
session_start();

//regras de administrador
switch ($_GET['pg']) {
    case 1:
        if($_SESSION['admin'] != 1){
            header('location: ../index.php?pg=1');
            exit;
        }        
        break;
    }

?>