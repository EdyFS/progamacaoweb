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
        return ($temperatura * 9 / 5) - 32;
    }
    
    public function mostrarExer7(){
        return view("exer1");
    }
    public function calcularExer7(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer8(){
        return view("exer1");
    }
    public function calcularExer8(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer9(){
        return view("exer1");
    }
    public function calcularExer9(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer10(){
        return view("exer1");
    }
    public function calcularExer10(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer11(){
        return view("exer1");
    }
    public function calcularExer11(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer12(){
        return view("exer1");
    }
    public function calcularExer12(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer13(){
        return view("exer1");
    }
    public function calcularExer13(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer14(){
        return view("exer1");
    }
    public function calcularExer14(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer15(){
        return view("exer1");
    }
    public function calcularExer15(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer16(){
        return view("exer1");
    }
    public function calcularExer16(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer17(){
        return view("exer1");
    }
    public function calcularExer17(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
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
