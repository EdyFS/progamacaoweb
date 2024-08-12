<?php require("cabecalho.php"); ?>
<h1>Exercicio 1 </h1>
<form action="exer1.php" method="POST">
<div class="row">
    <div class="col">
        <label for="lucros">Lucros da empresa</label>
        <input type="number" id="lucros" name="lucros" class="fom-control"/>
    </div>
    <div class="col">
        <label for="nome">Nome do funcionário</label>
        <input type="name" id="nome" name="nome" class="fom-control"/>
    </div>
    <div class="col">
        <label for="escala">Escala</label>
        <input type="number" id="escala" name="escala" class="fom-control"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularBonus($lucros, $nome, $escala){
    if ($escala == 1){
        $resultado = $lucros * 0.1 / 100;
        return echo ('O funcionário '+$nome+'receberá '+$resultado);
    }
    else if($escala == 2){
        $resultado = $lucros * 0.2 / 100;
        return echo ('O funcionário '+$nome+'receberá '+$resultado);
    }
    else if($escala == 3){
        $resultado = $lucros * 0.3 / 100;
        return echo ('O funcionário '+$nome+'receberá '+$resultado);
    }
    else if($escala == 4){
        $resultado = $lucros * 0.5 / 100;
        return echo ('O funcionário '+$nome+'receberá '+$resultado);
    }
    else if($escala == 5){
        $resultado = $lucros * 0.7 / 100;
        return echo ('O funcionário '+$nome+'receberá '+$resultado);
    }
}
if ($_POST) {
    $lucros = $_POST['lucros'];
    $nome = $_POST['nome'];
    $escala = $_POST['escala'];
    echo calcularBonus($lucros, $nome, $escala);
}require("rodape.php"); ?>