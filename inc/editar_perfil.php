<?php

require_once('../config/databases.php');

//SENHA
$update = "UPDATE usuarios SET 
            usuario='".$_POST['usuario']."', 
            nome='".$_POST['nomeUsuario']."', 
            cpf='".$_POST['cpf']."',
            empresa='".$_POST['empresa']."', 
            depto='".$_POST['departamento']."', 
            email='".$_POST['email']."'";

            if($_POST['senha'] != NULL){
                //bcrypt
                $options = ['cost' => 10];            
                $senha =   password_hash($_POST['senha'], PASSWORD_DEFAULT, $options);
                $update .= ", senha = '".$senha."'";
            }

$update .= " WHERE id_usuario = '".$_GET['id_usuario']."'";

if($resultUpdate = $conn->query($update)){
   header('Location: ../front/index.php?msn=3'); 
}else{
    echo "nao foi possivel editar o seu perfil!";
}