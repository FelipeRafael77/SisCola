<?php

include_once 'conexao.php';

class Fornecedores{
	
	private $id;
	private $nome;
	private $cnpj;
	private $endereco;
	private $telefone;
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

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function incluirFornecedor(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO fornecedores (nome, cnpj, endereco, telefone) VALUES (:nome,:cnpj,:endereco,:telefone)");
			$stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
			$stmt->bindValue(":cnpj", $this->cnpj, PDO::PARAM_STR);
			$stmt->bindValue(":endereco", $this->endereco, PDO::PARAM_STR);
			$stmt->bindValue(":telefone", $this->telefone, PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					header('Location: controllerfornecedores.php');
					$login = null;
					$senha = null;
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
}