<?php require("cabecalho.php"); ?>
<h1>Exercicio 4 </h1>
<form action="exer4.php" method="POST">
<h2>Dados da tarefa do projeto</h2>
<div class="row">
    <div class="col">
        <label for="nome">Nome da tarefa</label>
        <input type="name" id="nome" name="nome" class="fom-control"/>
    </div>
    <div class="col">
        <label for="horas">Total de horas da tarefa</label>
        <input type="number" id="horas" name="horas" class="fom-control"/>
    </div>
    <div class="col">
        <label for="complexidade">Complexidade</label>
        <input type="name" id="complexidade" name="complexidade" class="fom-control"/>
    </div>
</div>
<br>
<h2>Dados do funcionário candidato</h2>
<div class="row">
    <div class="col">
        <label for="funcionario">Nome do funcionário</label>
        <input type="name" id="funcionario" name="funcionario" class="fom-control"/>
    </div>
    <div class="col">
        <label for="horas_disponiveis">Total de horas disponíveis</label>
        <input type="number" id="horas_disponiveis" name="horas_disponiveis" class="fom-control"/>
    </div>
    <div class="col">
        <label for="experiencia">Nível de Experiência</label>
        <input type="name" id="experiencia" name="experiencia" class="fom-control"/>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular</button>
    </div>
</div>
</form>

<?php 
function calcularDisponibilidade($horas, $horas_disponiveis){
    $disponibilidade  = $horas + ($horas * 0.1);
    if ($horas_disponiveis > $disponibilidade){
        return ('O funcionário tem disponibilidade de tempo para realizar a tarefa');
    }
    else {
        return ('O funcionário não tem disponibilidade de tempo para realizar a tarefa');
    }
}

function determinarTrabalho($complexidade, $experiencia){
    if ($experiencia == 'junior'){
        if ($complexidade == 'baixa'){
            return ('Funcionário está apto');
        }
        else{
            return ('O funcionário não está apto');
        }
    }
    else if ($experiencia == 'pleno'){
        if ($complexidade == 'baixa' || $complexidade == 'média'){
            return ('Funcionário está apto');
        }
        else{
            return ('O funcionário não está apto');
        }
    }
    else if ($experiencia == 'senior'){
        if ($complexidade == 'média'|| $complexidade == 'alta'){
            return ('Funcionário está apto');
        }
        else{
            return ('O funcionário não está apto');
        }
    }
}

if ($_POST) {
    $horas = $_POST['horas'];
    $nome = $_POST['nome'];
    $complexidade = $_POST['complexidade'];
    $funcionario = $_POST['funcionario'];
    $horas_disponiveis = $_POST['horas_disponiveis'];
    $experiencia = $_POST['experiencia'];
    echo calcularDisponibilidade($horas, $horas_disponiveis)."<br>";
    echo determinarTrabalho($complexidade, $experiencia)."<br>";
}require("rodape.php"); ?>