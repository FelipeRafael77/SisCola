<?php

include_once 'conexao.php';
include 'utensilios.php';
include 'emprestimo.php';

class Itens_Emprestimo{
    
    private $id;
    private $quantidade;
    private $utensilios;
    private $emprestimo;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
        $this->utensilios = new Utensilios();
        $this->emprestimo = new Emprestimo();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setUtensilios($utensilios){
        $this->utensilios = $utensilios;
    }

    public function getUtensilios(){
        return $this->utensilios;
    }

    public function setEmprestimo($emprestimo){
        $this->emprestimo = $emprestimo;
    }

    public function getEmprestimo(){
        return $this->emprestimo;
    }

    public function incluirItensEmprestimo(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO itens_emprestimo (quantidade, idUtensilios, idEmprestimo) VALUES (:quantidade,:idUtensilios,:idEmprestimo)");
            $stmt->bindValue(":quantidade", $this->quantidade, PDO::PARAM_STR);
            $stmt->bindValue(":idUtensilios", $this->utensilios->getUtensilios()->getId(), PDO::PARAM_INT);
            $stmt->bindValue(":idEmprestimo", $this->emprestimo->getEmprestimo()->getId(), PDO::PARAM_INT);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controlleritensemprestimo.php');
                    $quantidade = null;
                    $utensilios = null;
                    $emprestimo = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controlleritensemprestimo.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}