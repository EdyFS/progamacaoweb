<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }
    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer2(){
        return view("exer2");
    }
    public function calcularExer2(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1-$valor2;
    }

    public function mostrarExer3(){
        return view("exer3");
    }
    public function calcularExer3(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1*$valor2;
    }

    public function mostrarExer4(){
        return view("exer4");
    }
    public function calcularExer4(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        if ($valor2 != 0){
        return $valor1/$valor2;
        }
        else{
            return "Não é possível dividir";
        }
    }

    public function mostrarExer5(){
        return view("exer5");
    }
    public function calcularExer5(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor3 = (int)$request->input('valor3');
        return ($valor1+$valor2+$valor3) / 3;
    }

    public function mostrarExer6(){
        return view("exer6");
    }
    public function calcularExer6(Request $request){
        $temperatura = (int)$request->input('temperatura');
        return ($temperatura * 9 / 5) + 32;
    }
    
    public function mostrarExer7(){
        return view("exer7");
    }
    public function calcularExer7(Request $request){
        $temperatura = (int)$request->input('temperatura');
        return ($temperatura -32) * 5 / 9 ;
    }

    public function mostrarExer8(){
        return view("exer8");
    }
    public function calcularExer8(Request $request){
        $altura = (int)$request->input('altura');
        $largura = (int)$request->input('largura');
        return $altura*$largura;
    }

    public function mostrarExer9(){
        return view("exer9");
    }
    public function calcularExer9(Request $request){
        $raio = (int)$request->input('raio');
        return $raio**2 * 3.14;
    }

    public function mostrarExer10(){
        return view("exer10");
    }
    public function calcularExer10(Request $request){
        $altura = (int)$request->input('altura');
        $largura = (int)$request->input('largura');
        return ($altura * 2) + ($largura * 2);
    }

    public function mostrarExer11(){
        return view("exer11");
    }
    public function calcularExer11(Request $request){
        $raio = (int)$request->input('raio');
        return $raio * 2 * 3.14;
    }

    public function mostrarExer12(){
        return view("exer12");
    }
    public function calcularExer12(Request $request){
        $base = (int)$request->input('base');
        $expoente = (int)$request->input('expoente');
        return $base**$expoente;
    }

    public function mostrarExer13(){
        return view("exer13");
    }
    public function calcularExer13(Request $request){
        $metro = (int)$request->input('metro');
        return $metro * 100;
    }

    public function mostrarExer14(){
        return view("exer14");
    }
    public function calcularExer14(Request $request){
        $quilometro = (int)$request->input('quilometro');
        return $quilometro * 0.621371;
    }

    public function mostrarExer15(){
        return view("exer15");
    }
    public function calcularExer15(Request $request){
        $altura = (double)$request->input('altura');
        $massa = (float)$request->input('massa');
        return $massa / ($altura**2);
    }

    public function mostrarExer16(){
        return view("exer16");
    }
    public function calcularExer16(Request $request){
        $preco = (int)$request->input('preco');
        $desconto = (int)$request->input('desconto');
        return $preco - ($preco * $desconto / 100);
    }

    public function mostrarExer17(){
        return view("exer17");
    }
    public function calcularExer17(Request $request){
        $capital = (int)$request->input('capital');
        $taxa = (int)$request->input('taxa');
        $periodo = (int)$request->input('periodo');
        return $capital*$taxa*$periodo;
    }

    public function mostrarExer18(){
        return view("exer1");
    }
    public function calcularExer18(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer19(){
        return view("exer1");
    }
    public function calcularExer19(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer20(){
        return view("exer1");
    }
    public function calcularExer20(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }
}
