<?php

include_once 'conexao.php';

class Tipo{
    
    private $id;
    private $descricao;
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

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function incluirTipo(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO tipo (descricao) VALUES (:descricao)");
            $stmt->bindValue(":descricao", $this->descricao, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllertipo.php');
                    $descricao = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllertipo.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function listarTipo(){

        $sql = $this->conexao->getStmt("SELECT idTipo, descricao FROM tipo");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}