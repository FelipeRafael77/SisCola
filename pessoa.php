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
            
            $stmt = $this->conexao->getStmt("INSERT INTO pessoa (nomePessoa, rgPessoa, cpfPessoa, enderecoPessoa, telefonePessoa, registroProfessor, matriculaAluno, status, idLogin, idTipo) VALUES (:nomePessoa,:rgPessoa,:cpfPessoa,:enderecoPessoa,:telefonePessoa,:registroProfessor,:matriculaAluno,:status,:idLogin,:idTipo)");

            $stmt->bindValue(":nomePessoa", $this->nome, PDO::PARAM_STR);
            $stmt->bindValue(":rgPessoa", $this->rg, PDO::PARAM_STR);
            $stmt->bindValue(":cpfPessoa", $this->cpf, PDO::PARAM_STR);
            $stmt->bindValue(":enderecoPessoa", $this->endereco, PDO::PARAM_STR);
            $stmt->bindValue(":telefonePessoa", $this->telefone, PDO::PARAM_STR);
            $stmt->bindValue(":registroProfessor", $this->regprof, PDO::PARAM_STR);
            $stmt->bindValue(":matriculaAluno", $this->mataluno, PDO::PARAM_STR);
            $stmt->bindValue(":status", $this->status, PDO::PARAM_STR);
            $stmt->bindValue(":idLogin",$this->getLogin(), PDO::PARAM_STR);
            $stmt->bindValue(":idTipo",$this->getTipo(), PDO::PARAM_STR);

            if ($stmt->execute()) {
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
                    $login = null;
                    $tipo = null;
                } else {
                    echo "<script>alert('Erro no cadastro!');</script>";
                    //header('Location: controllerpessoa.php');
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
            //header('Location: controllerpessoa.php');
        }
    }


        public function listarPessoa(){

        $sql = $this->conexao->getStmt("SELECT idPessoa, nomePessoa, rgPessoa, cpfPessoa, enderecoPessoa, telefonePessoa, registroProfessor, matriculaAluno, status, idLogin, idTipo FROM pessoa");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }

    public function excluirPessoa($id){
        $sql = $this->conexao->getStmt("DELETE FROM pessoa WHERE idPessoa= ".$id);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
public function alterarPessoa($id){
    $sql = $this->conexao->getStmt("UPDATE pessoa SET nomePessoa='".$_POST['nome']."', rgPessoa='".$_POST['rg']."', cpfPessoa='".$_POST['cpf']."', enderecoPessoa='".$_POST['endereco']."', telefonePessoa='".$_POST['telefone']."', registroProfessor='".$_POST['regprof']."', matriculaAluno='".$_POST['mataluno']."', status='".$_POST['status']."', idLogin='".$_POST['login']."', idTipo='".$_POST['tipo']."' WHERE idPessoa=".$id);
    if($sql->execute()){
            return true;
        }else{
            return false;
        }
}
} 