<?php

include_once 'conexao.php';
include 'devolucao.php';

class Multa{
    
    private $id;
    private $data;
    private $valor;
    private $devolucao;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
        $this->devolucao = new Devolucao();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setData($data){
        $this->data = date('Y-m-d', strtotime($data));
    }

    public function getData(){
        return date('d/m/Y', strtotime($this->data));
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setDevolucao($devolucao){
        $this->devolucao = $devolucao;
    }

    public function getDevolucao(){
        return $this->devolucao;
    }

    public function incluirMulta(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO multa (data, valor, idDevolucao) VALUES (:data,:valor,:idDevolucao)");

            $stmt->bindValue(":data", $this->data, PDO::PARAM_STR);
            $stmt->bindValue(":valor", $this->valor, PDO::PARAM_STR);
            $stmt->bindValue(":idDevolucao",$this->getDevolucao(), PDO::PARAM_STR);
            

            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllerpessoa.php');
                    $data = null;
                    $valor = null;
                    $devolucao = null;
                    
                } else {
                    echo "2";
                    echo "<script>alert('Erro no cadastro!');</script>";
                    //header('Location: controllerpessoa.php');
                }
            } else {
                $stmt->debugDumpParams();  
                $arr = $stmt->errorInfo();
                print_r($arr);
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
            //header('Location: controllerpessoa.php');
        }
    }
}