<?php

class Usuario{
    private $id;
    private $usuario;
    private $nome;
    private $email;
    private $senha;

    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i);
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($u){
        $this->usuario = trim($u);
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = ucwords(trim($n));
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = strtolower(trim($e));
    }
    public function setSenha($s){
        $this->senha = trim($s);
    }
    public function getSenha(){
        return $this->nome;
    }

}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
    public function findByToken($token);
}   