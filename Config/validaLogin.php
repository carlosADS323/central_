<?php



if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    
    require './database.php';
    require './UsuarioClass';
    
    $u = new Usuario();
    

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    if($u->login($email, $senha)== true){
        if(isset($_SESSION['idusuario'])){
            session_start();
            header("Location: ../View/home.php");
        }else{
            echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
        }
    }else{
        echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
    }
    
    
}else{
    echo "<script> alert('Usuário ou senha inválidos!'); window.location.href = '../index.php';</script>";
}
        
       