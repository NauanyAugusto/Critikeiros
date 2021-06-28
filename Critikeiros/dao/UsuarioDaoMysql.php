<?php
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
    private function generateUser($array){
        $u = new Usuario();
        $u->id = $array['id'] ?? 0;
        $u->usuario = $array['nome_usuario'] ?? 0;
        $u->nome = $array['nome_completo'] ?? '';
        $u->email = $array['email'] ?? '';
        $u->token = $array['token'] ?? '';

        return $u;
    }

    public function findByToken($token){
        
        if(!empty($token)){
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE token = :token");
        $sql->bindValue(':token', $token);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $user = $this->generateUser($data);
            return $user;
         }
        }
        return false;
    }


    public function add(Usuario $u){
        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome_usuario, nome_completo, email, senha) VALUES (:usuario, :nome, :email, :senha)");
        $sql->bindValue(":nome_usuario", $u->getUsuario());
        $sql->bindValue(":nome_completo", $u->getNome());
        $sql->bindValue(":email", $u->getEmail());
        $sql->bindValue(":email", $u->getSenha());
        $sql->execute();

        $u->setId( $this->pdo->lastInsertId() );
        return $u;
        
    }
    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setUsuario($item['nome_usuario']);
                $u->setNome($item['nome_completo']);
                $u->setEmail($item['email']);
                $u->setSenha($item['senha']);

                $array[] = $u;
            }
        }

        return $array;
    }
    public function findByEmail($email){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue('email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setUsuario($data['nome_usuario']);
            $u->setNome($data['nome_completo']);
            $u->setEmail($data['email']);
            $u->setSenha($data['senha']);

            return $u;
        }else{
            return false;
        }
    }
    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue('id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setUsuario($data['nome_usuario']);
            $u->setNome($data['nome_completo']);
            $u->setEmail($data['email']);
            $u->setSenha($data['senha']);
            return $u;
        }else{
            return false;
        }
    }
    public function update(Usuario $u){
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':id', $u->getId());
        $sql->execute();

        return true;
    }
    public function delete($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    
}