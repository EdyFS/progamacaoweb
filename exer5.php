<?php require("cabecalho.php"); ?>
<h1>Exercicio 5 </h1>
<form action="exer5.php" method="POST">
<div class="row">
    <div class="col">
        <label for="dias_trabalhados">Dias trabalhados</label>
        <input type="number" id="dias_trabalhados" name="dias_trabalhados" class="fom-control"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularFerias($dias_trabalhados){
    $ferias = $dias_trabalhados / 30;
    if ($ferias <= 30){
        return $ferias;
    }
    else{
        return 30;
    }
        
}
if ($_POST) {
    $dias_trabalhados = $_POST['dias_trabalhados'];
    echo calcularFerias($dias_trabalhados);
}require("rodape.php"); ?>