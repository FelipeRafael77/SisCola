<?php

include_once 'conexao.php';
include_once 'utensilios.php';
include_once 'emprestimo.php';

class Itens_Emprestimo{
    
    private $id;
    private $quantidade;
    private $utensilios;
    private $emprestimo;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
        $this->utensilios = new Utensilios_Escolares();
        $this->emprestimo = new Emprestimo();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setUtensilios($utensilios){
        $this->utensilios = $utensilios;
    }

    public function getUtensilios(){
        return $this->utensilios;
    }

    public function setEmprestimo($emprestimo){
        $this->emprestimo = $emprestimo;
    }

    public function getEmprestimo(){
        return $this->emprestimo;
    }
}