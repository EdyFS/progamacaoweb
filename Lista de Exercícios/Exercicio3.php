<?php

class abstract Telefone{
    private $DDD;
    private $numeroTelefone;
    private $tempoLigacao;

    public getDDD(){
        return $this->DDD;
    }

    public setDDD(){
        $this->DDD = $DDD;
    }

    public getnumeroTelefone(){
        return $this->numeroTelefone;
    }

    public setnumeroTelefone(){
        $this->numeroTelefone = $numeroTelefone;
    }

    public gettempoLigacao(){
        return $this->tempoLigacao;
    }

    public settempoLigacao(){
        $this->tempoLigacao = $tempoLigacao;
    }

    public function calculaCusto($tempoLigacao){
        
    }
}

class Fixo extends Telefone{
    private $custo;
    
    public getcusto(){
        return $this->custo;
    }

    public setcusto(){
        $this->custo = $custo;
    }

    public function calculaCusto($tempoLigacao){
        return $custo * $tempoLigacao;
    }
}

class abstract Celular extends Telefone{
    private $nomeOperadora;
    private $custoBase;
    
    public getcustoBase(){
        return $this->custoBase;
    }

    public setcustoBase(){
        $this->custoBase = $custoBase;
    }

    public getnomeOperadora(){
        return $this->nomeOperadora;
    }

    public setnomeOperadora(){
        $this->nomeOperadora = $nomeOperadora;
    }

}

class PrePago extends Celular{
    public function calculaCusto($tempoLigacao){
        return $custoBase + ($custoBase * 40 / 100);
    }
}

class PosPago extends Celular{
    public function calculaCusto($tempoLigacao){
        return $custoBase - ($custoBase * 10 / 100);
    }
}