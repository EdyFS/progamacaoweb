<?php

use PhpParser\Node\Expr\Cast\Double;

public class Funcionario{
    private string nome;
    private int codigo;
    private Double salarioBase;

    public Funcionario(int codigo, string nome, double salarioBase){
        this.codigo = codigo;
        this.nome = nome;
        this.salarioBase = salarioBase;
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