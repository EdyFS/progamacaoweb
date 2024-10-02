<?php

class Ponto {
    private int $x;
    private int $y;
    private int $contador = 0;

    public function getX():int
    {
        return $this->x;
    }
    public function setX(int $x): void
    {
        $this->x = $x;
    }
    public function getY():int
    {
        return $this->y;
    }
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function __construct()
    {
        
    }

    public function contador(){
        self::$contador++;
    }

    public function mostrarContador(){
        return self::$contador;
    }


    public function calcularDistnciaPontoObjeto(Ponto $outroPonto){
        $dx = $this->x - $outroPonto->getX();
        $dy = $this->y - $outroPonto->getY();
        $distancia = sqrt(($dx)**2 + ($dy)**2);
        return $distancia;
    }

    public function calcularDistnciaPontoPonto($x, $y){
        $dx = $this->x - $x;
        $dy = $this->y - $y;
        $distancia = sqrt(($dx)**2 + ($dy)**2);
        return $distancia;
    }

    public function calcularDistnciaDoisPontos($x1, $y1, $x2, $y2){
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        $distancia = sqrt(($dx)**2 + ($dy)**2);
        return $distancia;
    }
    
    public function deslocar(int $dx, int $dy){

    }

    function toString(): string
    {

    }
}