<?php

include 'conexao.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
self::$conexao = Conexao::Singleton();
$stmt = $conexao->getStmt("SELECT * FROM login WHERE login=:login and senha=:senha limit 1");
$stmt->bindValue(":login", $login);
$stmt->bindValue(":senha", $senha);

if($stmt->execute()){
  if($reg=$stmt->fetchObject()){
  	$_SESSION['login'] = $login;
  	header("Location: index.php");
  	exit;
  }else{
  	header("Location: telalogin.php");	
	exit;
  	}
}else{
  	throw new \Exception("Erro na validação de autenticação de usuário!");
}




?>