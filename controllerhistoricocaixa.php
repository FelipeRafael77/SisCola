<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'historicocaixa.php';
$historicocaixa = new Historico_Caixa();


if(!empty($_POST['descricao'])){

    $historicocaixa->setDescricao($_POST['descricao']);
    $historicocaixa->incluirHistoricoCaixa();
    header('Location: cadhistorico.php');
	

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($historicocaixa->excluirHistorico($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listhistorico.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listhistorico.php');
		}
         

	}
}

?>