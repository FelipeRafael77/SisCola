<?php

try{

    $conexao = new PDO("mysql:host=localhost; ", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS siscola";
    $conexao->exec($sql);

    $conexao = new PDO("mysql:host=localhost; dbname=siscola", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE login (
                idLogin int PRIMARY KEY,
                login varchar(100) NOT NULL,
                senha varchar(50) NOT NULL)";            
    $conexao->exec($sql);
    echo "DB criado com sucesso";
}

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}


class Conexao {

    public static $conexao;
    public $dbh;

    
    public static function Singleton(){
        if(self::$conexao === null){
            $class = __CLASS__;
            self::$conexao = new Conexao("root", "", "localhost", "siscola");
        }

        return self::$conexao;
    }

    private function __construct($login, $senha, $host, $banco){

        $conexao = new PDO("mysql:host=localhost; dbname=siscola", "root", "");

        $dsn = "mysql:dbname=$banco;host=$host";
        try{
            $this->dbh = new \PDO($dsn,$login,$senha);
        }catch(\PDOException $e){
            die($e->getMessage()); 

        }
    }

    public function getStmt($sql){
        return $this->dbh->prepare($sql);
    }

}





?>