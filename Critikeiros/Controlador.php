<?php

require 'config.php';


$usuario = filter_input(INPUT_POST,'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
$repeticao = filter_input(INPUT_POST, 'repeticao', FILTER_SANITIZE_SPECIAL_CHARS);

if($usuario && $nome && $email && $senha && $repeticao){
    if($senha === $repeticao){
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        
        if($sql->rowCount() === 0){
            $sql = $pdo->prepare("INSERT INTO usuarios (nome_usuario, nome_completo, email, senha) VALUES (:usuario, :nome, :email, :senha)");
            $sql->bindValue(':usuario', $usuario);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();    
            
            header("Location: Entrar.php");
            exit;
        }
        
    }else{
        header("Location: Cadastrar.php");
        exit;
    }


}else{
        header("Location: Cadastrar.php");
        exit;
}