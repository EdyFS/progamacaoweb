<?php

class abstract Telefone{
    private $DDD;
    private $numeroTelefone;

    public getDDD(){

    }

    public setDDD(){

    }

    public getnumeroTelefone(){

    }

    public setnumeroTelefone(){

    }

    public function calculaCusto(tempoLigacao){
        
    }
}

class Fixo extends Telefone{

}

class abstract Celular extends Telefone{

}

class PrePago extends Celular{

}

class PosPago extends Celular{

}