<?php

use PhpParser\Node\Expr\Cast\Double;

public class Funcionario{
    private string $nome;
    private int $codigo;
    private Double $salarioBase;

    public Funcionario(int codigo, string nome, double salarioBase){
        $this.codigo = $codigocodigo;
        $this.nome = $nome;
        $this.salarioBase = $salarioBase;
    }

    public string getNome(){return  nome;}
    public int getCodigo(){return codigo;}
    public double getSalarioBase() {return salarioBase;}
    public void setSalarioBase(double SalarioBase) {this.salarioBase = salarioBase;}
    public double getSalarioLiquido(){
        double inss = salarioBase *0.1;
        double ir = 0.0;
        if (salarioBase > 2000.0) { if = (salarioBase - 2000.0)*0.12;}
        return (salarioBase - innss - ir);
    }

    @override
    public String toString(){
        return (getClass().getSimpleName() + "\n Codigo: "+ getCodigo()
        + "\n Nome: " + getNome() + "\n Salario Base: " getSalarioBase() +"\n Salario Líquido: " +getSalarioLiquido());
    }
}

public class Servente extends Funcionario{
    private bool $insalubridade;
    public Servente(bool $insalubridade){
        $this->insalubridade = $insalubridade;
    }

    public bool $insalubridade{
        public function getinsalubridade(): bool{
            return $this->insalubridade;
        }
        public function setinsalubridade(bool $insalubridade){
            $this->insalubridade = $insalubridade;
        }

        public function adicionarInsalubridade(bool insalubride){
            if($insalubridade == true){
                return $salarioBase + ($salarioBase * 5 / 100);
            }
        }
    }
}

public class MestredeObras extends Servente{
    private int $numeroSupervisao;

    public MestredeObras(int $numeroSupervisao){
        public function getnumeroSupervisao(): int{
            return $this->numerodeSupervição;
        }
        public function setnumeroSupervisao(int numeroSupervisao){
            $this->numeroSupervisao = $numeroSupervisao;
        }

        public function adicionarSupervisao($numeroSupervisao){
            $adicional = $numeroSupervisao / 10;
            return $salarioBase + ($salarioBase * 10 / 100)*$adicional;
        }
    }
}

public class Motorista extends Funcionario{
    private string $numeroCarteira;

    public Motorista(numeroCarteira){
        public function getnumeroCarteira(): void{
            return $this->numeroCarteira;
        }
        public function setnumeroSupervisao():void{
            $this->numeroCarteira = $numeroCarteira
        }
    }
}