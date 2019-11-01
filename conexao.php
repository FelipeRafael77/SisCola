<?php

/*try{

    $conexao = new PDO("mysql:host=localhost; ", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS sisestagio";
    $conexao->exec($sql);

    $conexao = new PDO("mysql:host=localhost; dbname=sisestagio", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS pessoa (
                idPessoa int(11) PRIMARY KEY NOT NULL,
                nomePessoa varchar(100) NOT NULL,
                rgPessoa int(9) NOT NULL,
                cpfPessoa int(11) NOT NULL,
                enderecoPessoa varchar(50) NOT NULL,
                telefonePessoa varchar(14) NOT NULL,
                registroProfessor varchar(45) NOT NULL,
                matriculaAluno int NOT NULL,
                ativo boolean NOT NULL,
                idLogin int NOT NULL,
                idTipo int NOT NULL)";
    $conexao->exec($sql);

    $sql = "CREATE TABLE IF NOT EXISTS login (
                idLogin int PRIMARY KEY,
                login varchar(100) NOT NULL,
                senha varchar(50) NOT NULL)";            
    $conexao->exec($sql);
    echo "DB criado com sucesso";
}

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}*/


class Conexao {

    public static $conexao;
    private $dbh;

    public static function Singleton(){
        if(self::$conexao === null){
            self::$conexao = new Conexao();
        }

        return self::$conexao;
    }

    private function __construct(){
        try{
            $this->dbh = new PDO("mysql:host=localhost; dbname=sisestagio", "root", "");
        }catch(\PDOException $e){
            die($e->getMessage()); 

        }
    }

    public function getStmt($sql){
        return $this->dbh->prepare($sql);
    }

    public function getDbh(){
        return $this->dbh;
    }

}

?>