<?php

include_once 'conexao.php';

class Historico_Caixa{
    
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

    public function incluirHistoricoCaixa(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO historico_caixa (descricao) VALUES (:descricao)");
            $stmt->bindValue(":descricao", $this->descricao, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllerhistoricocaixa.php');
                    $descricao = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllerhistoricocaixa.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function listarHistorico(){

        $sql = $this->conexao->getStmt("SELECT idHistorico_Caixa, descricao FROM historico_caixa");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}