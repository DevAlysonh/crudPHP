<?php
//sessão....
session_start();
//conexão db.....
require_once 'add.php';
require_once 'db_connect.php';
//Atualizando os dados de clientes na tabela...
if(isset($_POST['btn-editar'])):
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
        $sql = "UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', idade='$idade' WHERE id='$id'";
   

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastro atualizado!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar";
            header('Location: ../index.php');
        endif;
    

endif;