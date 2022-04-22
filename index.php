<?php
    session_start();

    //enviando para validar os dados!
    if(empty($_SESSION['id_usuario'])){
        header('location: front/login.php');
    }else{
        header('location: front/index.php');
    }

?>