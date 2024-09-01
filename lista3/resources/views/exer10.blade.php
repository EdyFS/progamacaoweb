<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <form action="/respostaexer10" method="POST">
        @CSRF
        <input type="number" name="altura" placeholder="Altura"/>
        <input type="number" name="largura" placeholder="Largura"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>