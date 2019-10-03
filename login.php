<?php

include_once 'conexao.php';

class Login{
    
    private $id;
    private $login;
    private $senha;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function incluirLogin(){
        
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO login (login, senha) VALUES (:login,:senha)");
            $stmt->bindValue(":login", $this->login, PDO::PARAM_STR);
            $stmt->bindValue(":senha", $this->senha, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    header('Location: controllerlogin.php');
                    $login = null;
                    $senha = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllerlogin.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}