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
    	$this->dataDevolucao = $dataDevolucao;
    }
    public function getdataDevolucao(){
        return $this->dataDevolucao;
    }


    public function incluirDevolucao(){
    	
    	try {

    		$date = strtotime($dataDevolucao);
			$data_formatada = date('Y/m/d', $date);
            
            $stmt = $this->conexao->getStmt("INSERT INTO devolucao (dataDevolucao) VALUES (:dataDevolucao)");
            $stmt->bindValue(":dataDevolucao", $data_formatada);
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
}