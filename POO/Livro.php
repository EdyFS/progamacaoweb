<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano){ //construtor
        // __ é um chamado método mágico
        $this->titulo = $titulo; //referenciar, $vai no this e não no atributo
        $this->autor = $autor;
        $this->setAno($ano);

    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAno($ano){
        if ($ano < 1900)
            $ano = 1900;
        $this->ano = $ano;
    }

    public function getAno(){
        return $this->ano;
    }


}

$obj = new Livro("O Livro", "Ana", 1850);
var_dump($obj);