<?php

include_once 'conexao.php';
include 'pessoa.php';

class Emprestimo{
	
	private $id;
	private $tipoEmprestimo;
	private $dataEmprestimo;
	private $prazo;
	private $pessoa;
	private $conexao;

	public function __construct(){
		$this->conexao = Conexao::Singleton();
		$this->pessoa = new Pessoa();
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setTipoEmprestimo($tipoEmprestimo){
		$this->tipoEmprestimo = $tipoEmprestimo;
	}

	public function getTipoEmprestimo(){
		return $this->tipoEmprestimo;
	}

	public function setDataEmprestimo($dataEmprestimo){
		$this->dataEmprestimo = date('Y-m-d', strtotime($dataEmprestimo));
	}

	public function getDataEmprestimo(){
		return date('d/m/Y', strtotime($this->dataEmprestimo));
	}

	public function setPrazo($prazo){
		$this->prazo = date('Y-m-d', strtotime($prazo));
	}

	public function getPrazo(){
		return date('d/m/Y', strtotime($this->prazo));

}
	public function setPessoa($pessoa){
		$this->pessoa = $pessoa;
	}

	public function getPessoa(){
		return $this->pessoa;
}
	public function incluirEmprestimo(){
		
		try {
			
			$stmt = $this->conexao->getStmt("INSERT INTO emprestimo (tipoEmprestimo, dataEmprestimo, prazo, idPessoa) VALUES (:tipoEmprestimo,:dataEmprestimo,:prazo,:idPessoa)");
			$stmt->bindValue(":tipoEmprestimo", $this->tipoEmprestimo, PDO::PARAM_STR);
			$stmt->bindValue(":dataEmprestimo", $this->dataEmprestimo, PDO::PARAM_STR);
			$stmt->bindValue(":prazo", $this->prazo, PDO::PARAM_STR);
			$stmt->bindValue(":idPessoa", $this->getPessoa(), PDO::PARAM_INT);
			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					echo "<script>alert('Dados inseridos com sucesso!');</script>";
					//header('Location: controlleremprestimo.php');
					$tipoEmprestimo = null;
					$dataEmprestimo = null;
					$prazo = null;
					$pessoa = null;
				} else {
					echo "<script>alert('Erro no cadastro!');</script>";
					//header('Location: controlleremprestimo.php');
				}
			} else { 
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

	public function listarEmprestimo(){

        $sql = $this->conexao->getStmt("SELECT idEmprestimo, tipoEmprestimo, dataEmprestimo, prazo, idPessoa FROM emprestimo");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }
}