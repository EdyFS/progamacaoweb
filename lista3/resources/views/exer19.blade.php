<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <form action="/respostaexer19" method="POST">
        @CSRF
        <input type="number" name="dias" placeholder="Insira o número de dias"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>