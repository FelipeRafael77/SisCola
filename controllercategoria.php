<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'categoria.php';
$categoria = new Categoria();

if(!empty($_POST['nomeCategoria'])){

    $categoria->setNomeCategoria($_POST['nomeCategoria']);
    $categoria->incluirCategoria();
	include 'cadcategoria.php';
	

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($categoria->excluirCategoria($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listcategoria.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listcategoria.php');
		}
         

	}
}

?>