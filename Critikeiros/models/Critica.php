<?php

class Critica{
    private $id;
    private $resenha;
    private $estrela;


    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i);
    }
    public function getResenha(){
        return $this->resenha;
    }
    public function setResenha($r){
        $this->resenha = trim($r);
    }
    public function getEstrela(){
        return $this->estrela;
    }
    public function setEstrela($e){
        $this->resenha = trim($e);
    }
}
interface CriticaDAO {
    public function add(Critica $c);
    public function findAll();
    public function findById($id);
}   