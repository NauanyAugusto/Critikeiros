<?php
require_once 'models/Critica.php';

class CriticaDaoMysql implements CriticaDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Critica $c){
        $sql = $this->pdo->prepare("INSERT INTO critica (resenha, estrela) VALUES (:resenha, :estrela)");
        $sql->bindValue(":nome_usuario", $u->getResenha());
        $sql->bindValue(":nome_completo", $u->getEstrela());
        $sql->execute();

        $u->setId( $this->pdo->lastInsertId() );
        return $u;
    }
    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM critica");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $c = new Critica();
                $c->setId($item['id']);
                $c->setResenha($item['resenha']);
                $c->setEstrela($item['estrela']);

                $array[] = $c;
            }
        }

        return $array;
    }
    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM critica WHERE id = :id");
        $sql->bindValue('id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Critica();
            $c = new Critica();
            $c->setId($data['id']);
            $c->setResenha($data['resenha']);
            $c->setEstrela($data['estrela']);
            return $c;
        }else{
            return false;
        }
    }


}