<?php
require_once('../config/query.php');

//var_dump($_FILES['arquivo']);

if($_FILES['arquivo']["type"] === "text/csv"){

  // 1 - Deletando a tabela com os dados antigos


  // 2 - Criando a tabela para receber os dados novos

  // 3 - Inserindos os dados novos




}else{
  header('location: ../front/politicamente_exposto.php?pg='.$_GET['pg'].'&tela='.$_GET['tela'].'&msn=10');
}