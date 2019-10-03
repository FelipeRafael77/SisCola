<?php

include_once 'conexao.php';
include 'categoria.php';
include 'fornecedores.php';

class Utensilios_Escolares{
	
	private $id;
	private $nome;
	private $especificacao;
	private $quantidade;
	private $conexao;
	$categoria-> new Categoria();
    $fornecedores-> new Fornecedores();
	

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

	public function setEspecificacao($especificacao){
		$this->especificacao = $especificacao;
	}

	public function getEspecificacao(){
		return $this->especificacao;
	}

	public function setQuantidade($quantidade){
		$this->endereco = $quantidade;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function incluirUtensilio(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO utensilios_escolares (nome, especificacao, quantidade, idCategoria, idFornecedores) VALUES (:nome,:especificacao,:quantidade,:idCategoria,:idFornecedores)");
			$stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
			$stmt->bindValue(":especificacao", $this->cnpj, PDO::PARAM_STR);
			$stmt->bindValue(":quantidade", $this->endereco, PDO::PARAM_STR);
			$stmt->bindValue(":idCategoria", $this->telefone, PDO::PARAM_STR);
			$stmt->bindValue(":idFornecedores", $this->telefone, PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					header('Location: controllerutensilios.php');
					$login = null;
					$senha = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					header('Location: controllerutensilios.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}
}