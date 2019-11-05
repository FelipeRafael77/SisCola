<?php

include_once 'conexao.php';
include 'historicocaixa.php';
include 'multa.php';

class Caixa{
    
    private $id;
    private $data;
    private $saldo;
    private $entrada;
    private $saida;
    private $historico;
    private $multa;
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::Singleton();
        $this->historico = new Historico_Caixa();
        $this->multa = new Multa();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setDataAbertura($data){
        $this->data = date('Y-m-d', strtotime($data));
    }
    
    public function getDataAbertura(){
        return date('d/m/Y', strtotime($this->data));
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }

    public function getEntrada(){
        return $this->entrada;
    }

    public function setSaida($saida){
        $this->saida = $saida;
    }

    public function getSaida(){
        return $this->saida;
    }

   public function setHistorico($historico){
        $this->historico = $historico;
    }

    public function getHistorico(){
        return $this->historico;
    }

     public function setMulta($multa){
        $this->multa = $multa;
    }

    public function getMulta(){
        return $this->multa;
    }

    public function incluirCaixa(){
        try {
            
            $stmt = $this->conexao->getStmt("INSERT INTO caixa (dataAbertura, saldo, entrada, saida, idHistorico_Caixa, idMulta) VALUES (:dataAbertura,:saldo,:entrada,:saida,:idHistorico_Caixa,:idMulta)");

            $stmt->bindValue(":dataAbertura", $this->data, PDO::PARAM_STR);
            $stmt->bindValue(":saldo", $this->saldo, PDO::PARAM_STR);
            $stmt->bindValue(":entrada", $this->entrada, PDO::PARAM_STR);
            $stmt->bindValue(":saida", $this->saida, PDO::PARAM_STR);
            $stmt->bindValue(":idHistorico_Caixa",$this->getHistorico(), PDO::PARAM_STR);
            $stmt->bindValue(":idMulta",$this->getMulta(), PDO::PARAM_STR);
            

            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    //header('Location: controllerpessoa.php');
                    $data = null;
                    $saldo = null;
                    $entrada = null;
                    $saida = null;
                    $historico = null;
                    $multa = null;
                    
                } else {
                    echo "2";
                    echo "<script>alert('Erro no cadastro!');</script>";
                    //header('Location: controllerpessoa.php');
                }
            } else {
                $stmt->debugDumpParams();  
                $arr = $stmt->errorInfo();
                print_r($arr);
                throw new PDOException("Erro: Não foi possível executar o sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
            //header('Location: controllerpessoa.php');
        }
    }

    public function listarCaixa(){

        $sql = $this->conexao->getStmt("SELECT idCaixa, dataAbertura, saldo, entrada, saida, idHistorico_Caixa, idMulta FROM caixa");
        if($sql->execute()){
            return $sql->fetchAll();
        }

    }

    public function excluirCaixa($id){
        $sql = $this->conexao->getStmt("DELETE FROM caixa WHERE idCaixa= ".$id);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
}