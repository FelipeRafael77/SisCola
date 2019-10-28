<?php

include_once 'conexao.php';

class Fornecedores{
	
	private $id;
	private $nomeFornecedor;
	private $cnpjFornecedor;
	private $enderecoFornecedor;
	private $telefoneFornecedor;
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

	public function setNomeFornecedor($nomeFornecedor){
		$this->nomeFornecedor = $nomeFornecedor;
	}

	public function getNomeFornecedor(){
		return $this->nomeFornecedor;
	}

	public function setCnpjFornecedor($cnpjFornecedor){
		$this->cnpjFornecedor = $cnpjFornecedor;
	}

	public function getCnpjFornecedor(){
		return $this->cnpjFornecedor;
	}

	public function setEnderecoFornecedor($enderecoFornecedor){
		$this->enderecoFornecedor = $enderecoFornecedor;
	}

	public function getEnderecoFornecedor(){
		return $this->enderecoFornecedor;
	}

	public function setTelefoneFornecedor($telefoneFornecedor){
		$this->telefoneFornecedor = $telefoneFornecedor;
	}

	public function getTelefoneFornecedor(){
		return $this->telefoneFornecedor;
	}

	public function incluirFornecedor(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO fornecedores (nomeFornecedor, cnpjFornecedor, enderecoFornecedor, telefoneFornecedor) VALUES (:nomeFornecedor,:cnpjFornecedor,:enderecoFornecedor,:telefoneFornecedor)");
			$stmt->bindValue(":nomeFornecedor", $this->nomeFornecedor, PDO::PARAM_STR);
			$stmt->bindValue(":cnpjFornecedor", $this->cnpjFornecedor, PDO::PARAM_STR);
			$stmt->bindValue(":enderecoFornecedor", $this->enderecoFornecedor, PDO::PARAM_STR);
			$stmt->bindValue(":telefoneFornecedor", $this->telefoneFornecedor, PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					//header('Location: controllerfornecedores.php');
					$nomeFornecedor = null;
					$cnpjFornecedor = null;
					$enderecoFornecedor = null;
					$telefoneFornecedor = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					header('Location: controllerfornecedores.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

    public function listarFornecedores(){

        $sql = $this->conexao->getStmt("SELECT idFornecedores, nomeFornecedor, cnpjFornecedor, enderecoFornecedor, telefoneFornecedor FROM fornecedores");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}