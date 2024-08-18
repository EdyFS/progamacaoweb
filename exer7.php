<?php require("cabecalho.php"); ?>
<h1>Exercicio 7</h1>
<form action="exer7.php" method="POST">
<div class="row">
    <div class="col">
        <label for="prazo">Prazo para a finalização das obras</label>
        <input type="number" id="prazo" name="prazo" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesEstabelecidas">Taxa por hora dos funcionários</label>
        <input type="number" id="atividadesEstabelecidas" name="atividadesEstabelecidas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesDesenvolvidas">Custos adicionais</label>
        <input type="number" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesDia">Custos adicionais</label>
        <input type="number" id="atividadesDia" name="atividadesDia" class="fom-control"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularPorcentagem($atividadesEstabelecidas, $atividadesDesenvolvidas){
    $porcentgem = $atividadesDesenvolvidas /$atividadesEstabelecidas * 100;
    return ("Foi desenvolvido " + $porcentgem + "% do projeto");
        
}

function calcularTotal($maoDeObra, $custos){
    $total = $maoDeObra + $custos;
    return $maoDeObra;
        
}
if ($_POST) {
    $dias_trabalhados = $_POST['dias_trabalhados'];
    echo calcularFerias($dias_trabalhados);
}require("rodape.php"); ?>