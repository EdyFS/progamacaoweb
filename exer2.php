<?php require("cabecalho.php"); ?>
<h1>Exercicio 1 </h1>
<form action="exer1.php" method="POST">
<div class="row">
    <div class="col">
        <label for="valor_hora">Valor da Hora</label>
        <input type="number" id="valor_hora" name="valor_hora" class="fom-control"/>
    </div>
    <div class="col">
        <label for="quantidade_hora">Quantidade de horas trabalhadas</label>
        <input type="number" id="quantidade_hora" name="quantidade_hora" class="fom-control"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularSalario($valor_hora, $quantidade_hora){
    $resultado = $valor_hora*$quantidade_hora;
    return $resultado;
}
if ($_POST) {
    $valor_hora = $_POST['valor_hora'];
    $quantidade_hora = $_POST['quantidade_hora'];
    echo calcularSalario($valor_hora, $quantidade_hora);
}require("rodape.php"); ?>