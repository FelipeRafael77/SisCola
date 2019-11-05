<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'caixa.php';
$caixa = new Caixa();


if(!empty($_POST['dataAbertura'])){

    $caixa->setDataAbertura($_POST['dataAbertura']);
	$caixa->setSaldo($_POST['saldo']);
	$caixa->setEntrada($_POST['entrada']);
	$caixa->setSaida($_POST['saida']);
	$caixa->setHistorico($_POST['select_historico']);
	$caixa->setMulta($_POST['select_multa']);
    $caixa->incluirCaixa();
    header('Location: cadcaixa.php');

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($caixa->excluirCaixa($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listcaixa.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listcaixa.php');
		}
         

	}
}

?>