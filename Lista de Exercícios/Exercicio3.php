<?php

abstract class Telefone{
    private $DDD;
    private $numeroTelefone;
    private $tempoLigacao;

    public function getDDD(){
        return $this->DDD;
    }

    public function setDDD($DDD){
        $this->DDD = $DDD;
    }

    public function getnumeroTelefone(){
        return $this->numeroTelefone;
    }

    public function setnumeroTelefone($numeroTelefone){
        $this->numeroTelefone = $numeroTelefone;
    }

    public function gettempoLigacao(){
        return $this->tempoLigacao;
    }

    public function settempoLigacao($tempoLigacao){
        $this->tempoLigacao = $tempoLigacao;
    }

    public function calculaCusto($tempoLigacao, $custo){
        
    }
}

class Fixo extends Telefone{
    private $custo;
    
    public function getcusto(){
        return $this->custo;
    }

    public function setcusto($custo){
        $this->custo = $custo;
    }

    public function calculaCusto($tempoLigacao, $custo){
        return $custo * $tempoLigacao;
    }
}

abstract class Celular extends Telefone{
    private $nomeOperadora;
    private $custoBase;
    
    public function getcustoBase(){
        return $this->custoBase;
    }

    public function setcustoBase($custoBase){
        $this->custoBase = $custoBase;
    }

    public function getnomeOperadora(){
        return $this->nomeOperadora;
    }

    public function setnomeOperadora($nomeOperadora){
        $this->nomeOperadora = $nomeOperadora;
    }

    public function calculaCustoBase($custoBase){
        
    }
}

class PrePago extends Celular{
    public function calculaCustoBase($custoBase){
        return $custoBase + ($custoBase * 40 / 100);
    }
}

class PosPago extends Celular{
    public function calculaCustoBase($custoBase){
        return $custoBase - ($custoBase * 10 / 100);
    }
}