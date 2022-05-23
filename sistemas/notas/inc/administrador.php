<?php
//regras de administrador
switch ($_GET['pg']) {
    case 4:
        if($_SESSION['administrador'] == 0){
            echo '<script>window.location.href = "index.php?pg=1";</script>';
        }        
        break;
}
?>