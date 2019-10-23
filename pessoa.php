<?php

include_once 'conexao.php';
include 'login.php';
include 'tipo.php';

class Pessoa{
    
    private $id;
    private $nome;
    private $rg;
    private $cpf;
    private $endereco;
    private $telefone;
    private $regprof;
    private $mataluno;
    private $status;
    private $login;
    private $tipo;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
        $this->login = new Login();
        $this->tipo = new Tipo();
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

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
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

    public function setRegProf($regprof){
        $this->regprof = $regprof;
    }

    public function getRegProf(){
        return $this->regprof;
    }

    public function setMatAluno($mataluno){
        $this->mataluno = $mataluno;
    }

    public function getMatAluno(){
        return $this->mataluno;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function incluirPessoa(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO pessoa (nome, rg, cpf, endereco, telefone, regprof, mataluno, status, idLogin, idTipo) VALUES (:nome,:rg,:cpf,:endereco,:telefone,:regprof,:mataluno,:status,:idLogin,:idTipo)");
            $stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $stmt->bindValue(":rg", $this->rg, PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $this->cpf, PDO::PARAM_STR);
            $stmt->bindValue(":endereco", $this->endereco, PDO::PARAM_STR);
            $stmt->bindValue(":telefone", $this->telefone, PDO::PARAM_STR);
            $stmt->bindValue(":regprof", $this->regprof, PDO::PARAM_STR);
            $stmt->bindValue(":mataluno", $this->mataluno, PDO::PARAM_STR);
            $stmt->bindValue(":status", $this->status, PDO::PARAM_STR);
            $stmt->bindValue(":idLogin", 1, PDO::PARAM_INT);
            $stmt->bindValue(":idTipo", 1, PDO::PARAM_INT);
            echo "0";
            //var_dump($stmt);
            if ($stmt->execute()) {
                echo "1";
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllerpessoa.php');
                    $nome = null;
                    $rg = null;
                    $cpf = null;
                    $endereco = null;
                    $telefone = null;
                    $regprof = null;
                    $mataluno = null;
                    $status = null;
                    $idLogin = null;
                    $idTipo = null;
                } else {
                    echo "2";
                    echo "<script>alert('Erro no cadastro!');</script>";
                    header('Location: controllerpessoa.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
                echo "3";
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
            header('Location: controllerpessoa.php');
        }
    }
}