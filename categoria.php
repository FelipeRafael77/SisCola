<?php

include_once 'conexao.php';

class Categoria{
    
    private $id;
    private $nomeCategoria;
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

    public function setNomeCategoria($nomeCategoria){
        $this->nomeCategoria = $nomeCategoria;
    }

    public function getNomeCategoria(){
        return $this->nomeCategoria;
    }

    public function incluirCategoria(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO categoria (nomeCategoria) VALUES (:nomeCategoria)");
            $stmt->bindValue(":nomeCategoria", $this->nomeCategoria, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllercategoria.php');
                    $nomeCategoria = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllercategoria.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}