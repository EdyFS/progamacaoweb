<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <form action="/respostaexer12" method="POST">
        @CSRF
        <input type="number" name="base" placeholder="Base"/>
        <input type="number" name="expoente" placeholder="Expoente"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>