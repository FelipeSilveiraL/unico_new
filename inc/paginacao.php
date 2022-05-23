<?php

//telas
$tela = basename($_SERVER['PHP_SELF']);

/* REGRAS */

//MEUS SISTEMAS
if($tela === "index.php"){$_GET['pg'] == 1 ?: header('location: ../front/index.php?pg=1');}
//CONFIGURAÇÕES
if($tela === "usuarios.php"){$_GET['pg'] == 2 ?: header('location: ../front/usuarios.php?pg=2');}
if($tela === "usuariosEditar.php"){$_GET['pg'] == 2 ?: header('location: ../front/usuariosEditar.php?pg=2');}
if($tela === "usuarioNovo.php"){$_GET['pg'] == 2 ?: header('location: ../front/usuarioNovo.php?pg=2');}
if($tela === "dropdowns.php"){$_GET['pg'] == 2 ?: header('location: ../front/dropdowns.php?pg=2');}
if($tela === "dropdownsAcao.php"){$_GET['pg'] == 2 ?: header('location: ../front/dropdownsAcao.php?pg=2');}
if($tela === "sistema.php"){$_GET['pg'] == 2 ?: header('location: ../front/sistema.php?pg=2');}
if($tela === "sistemaAlterar.php"){$_GET['pg'] == 2 ?: header('location: ../front/sistemaAlterar.php?pg=2');}
if($tela === "sistemaAlterar.php"){$_GET['pg'] == 2 ?: header('location: ../front/sistemaAlterar.php?pg=2');}
if($tela === "api.php"){$_GET['pg'] == 2 ?: header('location: ../front/api.php?pg=2');}
//AJUDA
if($tela === "ajuda.php"){$_GET['pg'] == 3 ?: header('location: ../front/ajuda.php?pg=3');}

?>