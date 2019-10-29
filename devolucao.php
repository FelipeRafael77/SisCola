<?php

include_once 'conexao.php';

class Devolucao{

	private $id;
	private $dataDevolucao;
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

    public function setdataDevolucao($dataDevolucao){
    	$this->dataDevolucao = date('Y-m-d', strtotime($dataDevolucao));
    }
    public function getdataDevolucao(){
        return date('d/m/Y', strtotime($this->dataDevolucao));
    }


    public function incluirDevolucao(){
    	
    	try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO devolucao (dataDevolucao) VALUES (:dataDevolucao)");
            $stmt->bindValue(":dataDevolucao", $this->dataDevolucao, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllerdevolucao.php');
                    $dataDevolucao = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllerdevolucao.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function listarDevolucao(){

        $sql = $this->conexao->getStmt("SELECT idDevolucao, dataDevolucao FROM devolucao");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}