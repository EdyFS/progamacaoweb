<?php require("cabecalho.php"); ?>
<h1>Exercicio 7</h1>
<form action="exer7.php" method="POST">
<div class="row">
    <div class="col">
        <label for="prazo">Prazo para a finalização das obras</label>
        <input type="number" id="prazo" name="prazo" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesEstabelecidas">Quantidade de atividades estabelecidas</label>
        <input type="number" id="atividadesEstabelecidas" name="atividadesEstabelecidas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesDesenvolvidas">Quantidade de atividades desenvolvidas</label>
        <input type="number" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="atividadesDia">Quantidade de atividades por dia</label>
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
    return ("Foi desenvolvido " . $porcentgem . "% do projeto");
        
}

function calcularFinalizacao($atividadesDesenvolvidas, $atividadesEstabelecidas, $atividadesDia, $prazo){
    $diferenca = $atividadesEstabelecidas - $atividadesDesenvolvidas;
    $dias = $diferenca / $atividadesDia;
    if ($prazo >= $dias){
        return ("O projeto terminará no prazo");
    }
    else{
        return ("O projeto não terminará no prazo");
    }
        
}
if ($_POST) {
    $atividadesDesenvolvidas = $_POST['atividadesDesenvolvidas'];
    $atividadesEstabelecidas = $_POST['atividadesEstabelecidas'];
    $atividadesDia = $_POST['atividadesDia'];
    $prazo = $_POST['prazo'];
    echo calcularPorcentagem($atividadesEstabelecidas, $atividadesDesenvolvidas)."<br>";
    echo calcularFinalizacao($atividadesDesenvolvidas, $atividadesEstabelecidas, $atividadesDia, $prazo)."<br>";
}require("rodape.php"); ?>