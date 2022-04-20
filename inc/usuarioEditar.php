<?php

require_once('../config/databases.php');

//USUARIO
$nome = $_POST['nomeUsuario'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$empresa = $_POST['empresa'];
$departamento = $_POST['departamento'];
$usuario = $_POST['usuario'];
$alterarSenha = !empty($_POST['trocarSenha']) ? 1 : 0;
$admin = !empty($_POST['admin']) ? 1 : 0;

$updateUsuario = "UPDATE usuarios SET 
                        usuario='".$usuario."', 
                        nome='".$nome."', 
                        cpf='".$cpf."', 
                        empresa='".$empresa."', 
                        depto='".$departamento."', 
                        email='".$email."', ";

                        if($_POST['senha'] != NULL){
                            //bcrypt
                            $options = ['cost' => 10];            
                            $senha =   password_hash($_POST['senha'], PASSWORD_DEFAULT, $options);
                            $updateUsuario .= " senha = '".$senha."',";
                        }
$updateUsuario .=       "admin='".$admin."', 
                        alterar_senha_login='".$alterarSenha."' 
                    WHERE 
                        id_usuario='".$_GET['id_usuario']."'";

                        

?>