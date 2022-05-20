<?php

//telas
$tela = basename($_SERVER['PHP_SELF']);

/* REGRAS */

//index.php
if($tela === "index.php"){$_GET['pg'] == 1 ?: header('location: ../front/index.php?pg=1');}
//lancamento.php
if($tela === "lancamento.php"){$_GET['pg'] == 2 ?: header('location: ../front/lancamento.php?pg=2');}
//espelhar_usuarios.php
if($tela === "espelhar_usuarios.php"){$_GET['pg'] == 4 ?: header('location: ../front/espelhar_usuarios.php?pg=4');}
//configuracao.php
if($tela === "configuracao.php"){$_GET['pg'] == 4 ?: header('location: ../front/configuracao.php?pg=4');}
//ajuda.php
if($tela === "ajuda.php"){$_GET['pg'] == 5 ?: header('location: ../front/ajuda.php?pg=5');}

?>