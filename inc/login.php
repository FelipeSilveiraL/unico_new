<?php
session_start();

require_once('../config/databases.php');
require_once('../config/query.php');

//SQL injection
$usuario = mysqli_real_escape_string($conn, $_POST['username']);
$senha = mysqli_real_escape_string($conn, $_POST['password']);

//BUSCANDO USUÁRIO
$queryUsuarios .= "WHERE U.usuario = '" . $usuario . "'";
$resultadoUsuario = $conn->query($queryUsuarios);
$usuario = $resultadoUsuario->fetch_assoc();

if ($usuario['deletar'] == 1) {

    header('Location: ../front/login.php?pg='.$_GET['pg'].'msn=1');//usuario desativado

} else {
    
    if (password_verify($senha, $usuario['senha'])) {

        if ($usuario['alterar_senha_login'] == 1) {

            header('Location: ../front/usuarioAlterar.php?pg='.$_GET['pg'].'&id_usuario=' . $usuario['id_usuario'] . '');

        } else {
            //SESSÕES DO USUÁRIO
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
            $_SESSION['cpf'] = $usuario['cpf'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['admin'] = $usuario['admin'];
            $_SESSION['id_empresa'] = $usuario['id_empresa'];
            $_SESSION['empresa'] = $usuario['empresa'];
            $_SESSION['id_depto'] = $usuario['id_depto'];
            $_SESSION['departamento'] = $usuario['departamento'];

            header('Location: ../front/index.php?pg='.$_GET['pg'].'');

        }
    } else {
        header('Location: ../front/login.php?pg='.$_GET['pg'].'&msn=2');//usuario senha invalida
    }
}
