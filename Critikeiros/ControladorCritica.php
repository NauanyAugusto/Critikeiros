<?php

require 'config.php';
$resenha = filter_input(INPUT_POST,'resenha', FILTER_SANITIZE_SPECIAL_CHARS);
$estrela = filter_input(INPUT_POST,'estrela');

if($resenha && $estrela = 0){
        
        $sql = $pdo->prepare("SELECT * FROM critica WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() === 0){
            $sql = $pdo->prepare("INSERT INTO critica (resenha, estrela) VALUES (:resenha, :estrela)");
            $sql->bindValue(':resenha', $resenha);
            $sql->bindValue(':estrela', $estrela);
            $sql->execute();    
            
            header("Location: MinhaLista.php");
            exit;
        }
        
    }else{
        header("Location: SuaCritica.php");
        exit;
    }

