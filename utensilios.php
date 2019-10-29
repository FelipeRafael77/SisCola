<?php

include_once 'conexao.php';
include 'categoria.php';
include 'fornecedores.php';

class Utensilios_Escolares{
	
	private $id;
	private $nomeUtensilio;
	private $especificacao;
	private $quantidade;
	private $categoria;
	private $fornecedores;
	private $conexao;
	

	public function __construct(){
		$this->conexao = Conexao::Singleton();
		$this->categoria = new Categoria();
        $this->fornecedores = new Fornecedores();
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setNomeUtensilio($nomeUtensilio){
		$this->nomeUtensilio = $nomeUtensilio;
	}

	public function getNomeUtensilio(){
		return $this->nomeUtensilio;
	}

	public function setEspecificacao($especificacao){
		$this->especificacao = $especificacao;
	}

	public function getEspecificacao(){
		return $this->especificacao;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setFornecedores($fornecedores){
		$this->fornecedores = $fornecedores;
	}

	public function getFornecedores(){
		return $this->fornecedores;
	}

	public function incluirUtensilio(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO utensilios_escolares (nomeUtensilio, especificacao, quantidade, idCategoria, idFornecedores) VALUES (:nomeUtensilio,:especificacao,:quantidade,:idCategoria,:idFornecedores)");
			$stmt->bindValue(":nomeUtensilio", $this->nomeUtensilio, PDO::PARAM_STR);
			$stmt->bindValue(":especificacao", $this->especificacao, PDO::PARAM_STR);
			$stmt->bindValue(":quantidade", $this->quantidade, PDO::PARAM_INT);
			$stmt->bindValue(":idCategoria", $this->getCategoria(), PDO::PARAM_INT);
			$stmt->bindValue(":idFornecedores", $this->getFornecedores(), PDO::PARAM_INT);

            if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					//header('Location: controllerutensilios.php');
					$nomeUtensilio = null;
					$especificacao = null;
					$quantidade = null;
					$categoria = null;
					$fornecedores = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					//header('Location: controllerutensilios.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

	public function listarUtensilios(){

        $sql = $this->conexao->getStmt("SELECT idUtensilios, nomeUtensilio, especificacao, quantidade, idCategoria, idFornecedores FROM utensilios_escolares");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}