<?php

include_once 'conexao.php';
include 'pessoa.php';

class Emprestimo{
	
	private $id;
	private $tipoEmprestimo;
	private $dataEmprestimo;
	private $prazo;
	private $conexao;
	private $pessoa;

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
		$this->dataEmprestimo = $dataEmprestimo;
	}

	public function getDataEmprestimo(){
		return $this->dataEmprestimo;
	}

	public function setPrazo($prazo){
		$this->prazo = $prazo;
	}

	public function getPrazo(){
		return $this->prazo;


	public function setPessoa($pessoa){
		$this->pessoa = $pessoa;
	}

	public function getPessoa(){
		return $this->pessoa;

	public function incluirEmprestimo(){
		
		try {

			$date = strtotime($dataEmprestimo);
			$data_formatada = date('Y/m/d', $date);
			
			$stmt = $this->conexao->getStmt("INSERT INTO emprestimo (tipoEmprestimo, dataEmprestimo, prazo, idPessoa) VALUES (:tipoEmprestimo,:dataEmprestimo,:prazo,:idPessoa)");
			$stmt->bindValue(":tipoEmprestimo", $this->tipoEmprestimo, PDO::PARAM_STR);
			$stmt->bindValue(":dataEmprestimo", $this->data_formatada);
			$stmt->bindValue(":prazo", $this->prazo, PDO::PARAM_STR);
			$stmt->bindValue(":idPessoa", $this->pessoa->getPessoa()->getId(), PDO::PARAM_INT);
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
					header('Location: controlleremprestimo.php');
				}
			} else {
				throw new PDOException("Erro: Não foi possível executar o sql");
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}
}