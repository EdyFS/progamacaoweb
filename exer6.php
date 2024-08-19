<?php require("cabecalho.php"); ?>
<h1>Exercicio 6</h1>
<form action="exer6.php" method="POST">
<div class="row">
    <div class="col">
        <label for="horas">Horas trabalhados</label>
        <input type="number" id="horas" name="horas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="taxa">Taxa por hora dos funcionários</label>
        <input type="number" id="taxa" name="taxa" class="fom-control"/>
    </div>
    <div class="col">
        <label for="custos">Custos adicionais</label>
        <input type="number" id="custos" name="custos" class="fom-control"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularMaoDeObra($horas, $taxa){
    $maoDeObra = $horas * $taxa;
    return $maoDeObra;
}

function calcularTotal($maoDeObra, $custos){
    $total = $maoDeObra + $custos;
    return $maoDeObra;
        
}
if ($_POST) {
    $horas = $_POST['horas'];
    $taxa = $_POST['taxa'];
    $custos = $_POST['custos'];
    echo calcularMaoDeObra($horas, $taxa);
    echo calcularTotal($maoDeObra, $custos);
}require("rodape.php"); ?>