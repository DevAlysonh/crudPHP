<?php
//sessão....
session_start();
//conexão db.....
require_once 'db_connect.php';
//deletando os dados de clientes da tabela....
if(isset($_POST['btn-deletar'])):
    
    $id = mysqli_escape_string($connect, $_POST['id']);
    
        $sql = "DELETE FROM clientes WHERE id='$id'";
   

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastro Deletado";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao deletar.";
            header('Location: ../index.php');
        endif;
    

endif;