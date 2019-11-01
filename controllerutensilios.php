<?php

session_start();
if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'utensilios.php';
$utensilios = new Utensilios_Escolares();

if(!empty($_POST['nome'])){

    $utensilios->setNomeUtensilio($_POST['nome']);
	$utensilios->setEspecificacao($_POST['especificacao']);
	$utensilios->setQuantidade($_POST['quantidade']);
	$utensilios->setCategoria($_POST['select_categoria']);
    $utensilios->setFornecedores($_POST['select_fornecedor']);
    $utensilios->incluirUtensilio();
    header('Location: cadutensilio.php');

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerutensilios.php');
//			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerutensilios.php');
//		}
         

//	}
}

?>