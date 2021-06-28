<?php
require_once 'dao/UsuarioDaoMysql.php';
class Auth{
    private $pdo;
    private $base;

    public function _construct(PDO $pdo, $base){
        $this->pdo = $pdo;
        $this->base = $base;
    }

    public function checkToken() {
        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $user = new UsuarioDaoMysql($this->pdo);
            $user = $userDao->findByToken($token);

            if($user){
                return $user;
            }
        }

        header("Location: http://localhost/Critikeiros/Entrar.php");
        exit;
    }
}